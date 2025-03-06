<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css">
    
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/-styles.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Top Contact Section -->
    <div class="top-contact">
        <a href="#" class="btn contact-btn">Contact Now &#9776;</a>
    </div>

    <div class="navbar-indicator-container sticky-top">
        <!-- Sticky Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light sticky-top">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav-logo.png" alt="Company Logo" height="45">
                </a>

                <!-- Navbar Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar Links -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- Static Mega Menu Item -->
                        <li class="nav-item mega-menu-parent">
                            <a class="nav-link" href="#">Traffic & Qualified Leads</a>
                            <div class="mega-menu">
                                <div class="mega-menu-content row">
                                    <div class="col-md-3">
                                        <h5>Lead Generation Services</h5>
                                        <h5>Social Media Services</h5>
                                        <ul>
                                            <li>Social Media Management</li>
                                            <li>Social Media Strategy Development</li>
                                            <li>Influencer Marketing</li>
                                        </ul>
                                        <h5>Social Media Services</h5>
                                        <ul>
                                            <li>Facebook Ads</li>
                                            <li>Instagram Ads</li>
                                            <li>TikTok Ads</li>
                                            <li>X Ads</li>
                                        </ul>
                                        <h5>Search Engine Marketing (SEM)</h5>
                                        <ul>
                                            <li>eCommerce SEO</li>
                                            <li>Mobile SEO</li>
                                            <li>Local SEO</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Pay-Per-Click Advertising (PPC)</h5>
                                        <ul>
                                            <li>Google Ads</li>
                                            <li>Bing Ads</li>
                                            <li>Display Advertising</li>
                                            <li>Retargeting/Remarketing</li>
                                            <li>Shopping Ads</li>
                                        </ul>
                                        <h5>Email Marketing</h5>
                                        <ul>
                                            <li>Email Marketing Campaigns</li>
                                            <li>Newsletters</li>
                                            <li>Drip Campaigns</li>
                                        </ul>
                                        <h5>eCommerce Marketing</h5>
                                    </div>
                                    <div class="col-md-3">
                                        <h5>Branding Strategy</h5>
                                        <ul>
                                            <li>Brand Audits & Strategy Development</li>
                                        </ul>
                                        <h5>Startup Growth</h5>
                                        <ul>
                                            <li>Market Validation</li>
                                            <li>Go-To-Market Strategy</li>
                                            <li>Automation</li>
                                            <li>Product Development</li>
                                        </ul>
                                        <h5>Other</h5>
                                        <ul>
                                            <li>Performance Marketing</li>
                                            <li>Social Media Support</li>
                                        </ul>
                                    </div>
                                    <div class="solutions-box col-md-3">
                                        <h5>What we solve?</h5>
                                        <ul>
                                            <li>My social media marketing isnâ€™t generating revenue</li>
                                            <li>How & where to sell products online</li>
                                            <li>How to find clients for my business</li>
                                            <li>How to find international clients</li>
                                            <li>Need more visitors to my website</li>
                                        </ul>
                                        <a href="#" class="btn btn-danger">Solutions</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                         <!-- Conversion Optimization with mega menu -->
  <li class="nav-item mega-menu-parent">
    <a class="nav-link" href="#">Conversion Optimization</a>
    <div class="mega-menu">
        <div class="mega-menu-content row">
            <!-- Column 1: Conversion Rate Optimization -->
            <div class="col-md-3">
                <h5>Conversion Rate Optimization</h5>
                    <ul>
                        <li>Landing Page &amp; Funnel Optimization</li>
                        <li>User Experience Auditing &amp; Optimization</li>
                    </ul>
                <h5>eCommerce Optimization</h5>
                        <ul>
                         <li>Shopify Auditing &amp; Conversion</li>
                         <li>Product Page Optimization</li>
                         <li>Cart &amp; Checkout Optimization</li>
                        </ul>
                <h5>Mobile Optimization</h5>
                <ul>
                    <li>App Store Optimization (ASO)</li>
                    <li>Conversion-Driven Mobile Apps</li>
                    <li>Session Recordings</li>
                </ul>
            </div>
            <!-- Column 2: Lead Generation & Social Media Services -->
            <div class="col-md-3">
                <h5>User Experience Optimization </h5>
                <ul>
                    <li>UX Designs</li>
                        <ul>
                            <li>Heatmap Analysis</li>
                            <li>Usability Testing</li>
                        </ul>
                    
                    <li>A/B Testing</li>
                        <ul>
                            <li>Landing Page Testing</li>
                            <li>Ad Copy Testing</li>
                        </ul>
                    <li>Website Optimization</li>
                        <ul>
                            <li>Speed Optimization</li>
                            <li>Mobile Optimization</li>
                        </ul>
                    </ul>
            </div>
            <!-- Column 3: Social Media Ads -->
            <div class="col-md-3">
              <ul>
                <h5>Analytics & Performance Tracking</h5>
                <ul>
                    <li>Performance Tracking</li>
                    <li>Sentiment Analysis</li>
                   
                </ul>
                <h5>Performance Analysis</h5>
                <ul>
                    <li>Engagement Metrics</li>
                    <li>ROI Measurement</li>
                    
                </ul>
                <h5>Web Analytics</h5>
                <ul>
                    <li>Google Analytics</li>
                    <li>Traffic Analysis</li>
                    
                </ul>
                <h5>E-commerce Analytics</h5>
                <ul>
                    <li>GSales Funnel Analysis</li>
                    <li>Customer Lifetime Value (CLV)</li>
                    
                </ul>
            </div>
            <!-- Column 5: Tools, Integrations & Get Started -->
             <div class="solutions-box col-md-3">
                 <h5>What we solve?</h5>
                    <ul>
                    <li>How I can know if my traffic converting to customers?</li>
                    <li>What is conversion focused design & Development?</li>
                    </ul>
                    <a href="#" class="btn btn-danger">Solutions</a>
            </div>
    </div>
</li>
                        <!-- Growth Lab Mega Menu -->
    <li class="nav-item mega-menu-parent">
        <a class="nav-link" href="#">Growth Lab 🚀</a>
        <div class="mega-menu">
            <div class="mega-menu-content row">
                <!-- Customize the Growth Lab mega menu content -->
                <div class="col-md-3">
                    <h5>Tools &amp; Integrations</h5>
                        <ul>
                            <li>Google Analytics</li>
                            <li>Tag Manager</li>
                            <li>Conversion Funnels</li>
                         </ul>
                </div>
                <div class="col-md-3">
                    <h5>Growth Solutions</h5>
                    <ul>
                        <li>Growth Marketing</li>
                        <li>Sales Driven Marketing</li>
                        <li>Market Validation</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    
                    <h5>Tools &amp; Resources</h5>
                    <ul>
                        <li>Growth Hacking Tools</li>
                        <li>Analytics Platforms</li>
                        <li>Best Practices</li>
                    </ul>
                    <h5>Resources</h5>
                    <ul>
                        <li>Our Blog</li>
                        <li>Industry Insights</li>
                    </ul>
                </div>
                 <div class="solutions-box col-md-3">
                     <h5>Team</h5>
                        <ul>
                        <li>Why Us?</li>
                        <li>Messurable Results</li>
                        <li>Team</li>
                        <li>Careers</li>
                        </ul>
                    <a href="#" class="btn btn-danger">Get in Touch</a>
                </div>
            </div>
        </div>
    </li>

                        <!-- Additional dynamic menu items (if any) -->
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'main-menu',
                            'menu_class'     => 'navbar-nav',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // Output only list items so they appear alongside the static item
                        ));
                        ?>
                    </ul>
                </div>

                <!-- Call to Action Button -->
                <a href="#" class="btn proposal-btn">Get My Proposal</a>
            </div>
        </nav>

        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>
    </div>

    <!-- Floating Secondary Navbar -->
    <div class="floating-navbar">
        <a href="#convert" class="active">Agencies that don't convert</a>
        <a href="#mistakes">Mistakes hurts your sales</a>
        <a href="#process">Power of CRO</a>
        <a href="#cro-right">CRO right for me?</a>
        <a href="#faq">FAQ</a>
    </div>
