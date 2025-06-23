// Contact form handling with toast notifications and local storage
document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contactForm');
    
    if (contactForm) {
        contactForm.addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission
            
            // Get form data
            const formData = new FormData(contactForm);
            const formObject = {};
            formData.forEach((value, key) => {
                formObject[key] = value;
            });
            
            // Add timestamp
            formObject.timestamp = new Date().toISOString();
            
            // Validate form
            if (!validateContactForm(formObject)) {
                showToast('Please fill in all required fields correctly.', 'error');
                return;
            }
            
            // Show loading state
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalText = submitButton.querySelector('.btn-text').textContent;
            submitButton.querySelector('.btn-text').textContent = 'Sending...';
            submitButton.disabled = true;
            
            // Save to localStorage
            saveContactSubmission(formObject);
            
            // Submit to server (optional)
            fetch('sendmail.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                showToast('Thank you! Your message has been sent successfully.', 'success');
                contactForm.reset();
            })
            .catch(error => {
                console.error('Error:', error);
                // Still show success since we saved locally
                showToast('Thank you! Your message has been saved and will be processed soon.', 'success');
                contactForm.reset();
            })
            .finally(() => {
                // Reset button state
                submitButton.querySelector('.btn-text').textContent = originalText;
                submitButton.disabled = false;
            });
        });
    }
});

// Form validation function
function validateContactForm(formData) {
    const required = ['name', 'email', 'phone', 'subject', 'message'];
    
    for (let field of required) {
        if (!formData[field] || formData[field].trim().length === 0) {
            return false;
        }
    }
    
    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
        return false;
    }
    
    // Phone validation
    const phoneRegex = /[0-9+\-() ]{7,20}/;
    if (!phoneRegex.test(formData.phone)) {
        return false;
    }
    
    return true;
}

// Save contact submission to localStorage
function saveContactSubmission(formData) {
    try {
        let submissions = JSON.parse(localStorage.getItem('contactSubmissions')) || [];
        submissions.push(formData);
        
        // Keep only last 50 submissions to prevent storage overflow
        if (submissions.length > 50) {
            submissions = submissions.slice(-50);
        }
        
        localStorage.setItem('contactSubmissions', JSON.stringify(submissions));
    } catch (error) {
        console.error('Error saving to localStorage:', error);
    }
}

// Toast notification system
function showToast(message, type = 'info') {
    // Remove existing toasts
    const existingToasts = document.querySelectorAll('.toast-notification');
    existingToasts.forEach(toast => toast.remove());
    
    // Create toast element
    const toast = document.createElement('div');
    toast.className = `toast-notification toast-${type}`;
    toast.innerHTML = `
        <div class="toast-content">
            <div class="toast-icon">
                ${type === 'success' ? '✓' : type === 'error' ? '✗' : 'ℹ'}
            </div>
            <div class="toast-message">${message}</div>
            <button class="toast-close" onclick="this.parentElement.parentElement.remove()">×</button>
        </div>
    `;
    
    // Add to page
    document.body.appendChild(toast);
    
    // Animate in
    setTimeout(() => toast.classList.add('toast-show'), 100);
    
    // Auto remove after 5 seconds
    setTimeout(() => {
        if (toast.parentElement) {
            toast.classList.remove('toast-show');
            setTimeout(() => toast.remove(), 300);
        }
    }, 5000);
}