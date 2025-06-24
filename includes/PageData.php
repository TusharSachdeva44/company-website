<?php

/**
 * Page Data Helper
 * 
 * Contains data and content for different pages
 */
class PageData
{
    /**
     * Get home page data
     */
    public static function getHomePageData()
    {
        return [
            'hero_slides' => [
                [
                    'title' => 'Technology Based Logistics Solution',
                    'subtitle' => 'IT Integrated Supply Chain Solutions with Advanced Technology',
                    'image_class' => 'banner-top1'
                ],
                [
                    'title' => 'Inventory Management',
                    'subtitle' => 'with Latest Warehousing Solutions',
                    'image_class' => 'banner2'
                ],
                [
                    'title' => 'Delivering Excellence',
                    'subtitle' => 'in Freight Forwarding at all Indian Ports',
                    'image_class' => 'banner3'
                ]
            ],
            
            'services' => [
                [
                    'icon' => 'fa-users',
                    'title' => 'Warehousing Services',
                    'description' => 'Customized Warehouse & Inventory Management with solution-based & cost-effective approach.'
                ],
                [
                    'icon' => 'fa-linode',
                    'title' => 'IT & Automation',
                    'description' => 'System integrated & technology-driven services, IoT product solutions, process improvement & consulting.'
                ],
                [
                    'icon' => 'fa-book',
                    'title' => 'Freight Forwarding',
                    'description' => 'Digitised forwarding services, turnkey projects at all major Indian ports.'
                ],
                [
                    'icon' => 'fa-laptop',
                    'title' => 'Value Added Services',
                    'description' => 'Customized documentation, kitting, stickering, GST/excise registration, and other value-added services.'
                ],
                [
                    'icon' => 'fa-thumbs-o-up',
                    'title' => 'Project Management',
                    'description' => 'Logistics and materials handling system design, performance, and project execution.'
                ],
                [
                    'icon' => 'fa-magic',
                    'title' => 'Distribution Logistics',
                    'description' => 'Primary & secondary distribution, cross-border deliveries up to last mile with on-time performance.'
                ]
            ],
            
            'stats' => [
                [
                    'icon' => 'fa-smile-o',
                    'number' => '2017',
                    'label' => 'Founded Year'
                ],
                [
                    'icon' => 'fa-shield',
                    'number' => '920',
                    'label' => 'Cross Border Deliveries'
                ],
                [
                    'icon' => 'fa-cog',
                    'number' => '15+',
                    'label' => 'Technology Solutions'
                ],
                [
                    'icon' => 'fa-users',
                    'number' => '50+',
                    'label' => 'Happy Clients'
                ]
            ],
            
            'company_intro' => 'At <strong>GRAM Supply Chain Solutions Private Limited</strong>, we pride ourselves on being a leading integrated logistics solution provider in India, with a strong presence in international markets such as Japan. Our rapid expansion is driven by our commitment to leveraging cutting-edge technology and scientific methods to minimize human intervention and maximize efficiency. We are dedicated to delivering innovative logistics solutions that streamline operations and enhance supply chain performance.'
        ];
    }
    
    /**
     * Get navigation menu items
     */
    public static function getNavigationItems()
    {
        return [
            ['name' => 'Home', 'url' => '/index.php', 'active' => true],
            ['name' => 'About Us', 'url' => '/about-us.php'],
            ['name' => 'Services', 'url' => '#', 'dropdown' => [
                ['name' => 'Warehousing', 'url' => '/warehousing.php'],
                ['name' => 'Transportation', 'url' => '/transportation.php'],
                ['name' => 'Import Services', 'url' => '/import-services.php'],
                ['name' => 'Export Services', 'url' => '/export-services.php'],
                ['name' => 'Air Freight', 'url' => '/air-freight.php'],
                ['name' => 'Ocean Freight', 'url' => '/ocean-freight.php'],
                ['name' => 'Rail Freight', 'url' => '/rail-freight.php']
            ]],
            ['name' => 'Technology', 'url' => '#', 'dropdown' => [
                ['name' => 'IoT Solutions', 'url' => '/iot-product-solution.php'],
                ['name' => 'Management System', 'url' => '/management-information-system.php'],
                ['name' => 'Process Automation', 'url' => '/process-improvement-and-automation.php']
            ]],
            ['name' => 'Contact', 'url' => '/contact.php']
        ];
    }
}
