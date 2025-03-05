<?php
/*
Template Name: Roi-form
*/
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Popup Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <button class="open-popup-btn" onclick="openPopup()">Apply Now</button>
    <div class="popup-overlay" id="main-popup">
        <div class="popup-form">
            <span class="close-btn" onclick="closePopup()">×</span>
            <h2 class="form-title">🚀 Apply for Our 2X ROI Guarantee!</h2>
            
            <!-- Wrap all steps in one form -->
            <form id="application-form">
                <!-- Step 1: About You -->
                <div class="form-step active" id="step-1">
                    <span class="step-number">01</span>
                    <span class="step-title">About You</span>
                    <hr class="left-bold-line">
                    <label for="full-name">Full Name*</label>
                    <input type="text" id="full-name" name="fullName" required>
                    
                    <div class="three-columns">
                        <div class="input-group">
                            <label for="work-email">Work Email*</label>
                            <input type="email" id="work-email" name="workEmail" required>
                        </div>
                        <div class="input-group">
                            <label for="job-title">Job Title*</label>
                            <input type="text" id="job-title" name="jobTitle" required>
                        </div>
                        <div class="input-group">
                            <label for="industry">Industry*</label>
                            <input type="text" id="industry" name="industry" required>
                        </div>
                    </div>
                    
                    <label for="website-url">Website URL*</label>
                    <input type="url" id="website-url" name="websiteURL" required>
                    
                    <label for="whatsapp">WhatsApp (Optional)</label>
                    <input type="text" id="whatsapp" name="whatsapp">
                    
                    <div class="form-navigation">
                        <img src="companylogo.png" alt="Company Logo" class="company-logo">
                        <button type="button" id="next-btn-1" class="next-btn" onclick="nextStep(1)">Next</button>
                    </div>
                </div>

                <!-- Step 2: Monthly Website Traffic -->
                <div class="form-step" id="step-2">
                    <span class="step-number">02</span>
                    <span class="step-title">Monthly Website Traffic</span>
                    <hr class="left-bold-line">
                    <p>(Traffic must be enough for valid testing)</p>
                    <select name="traffic" id="traffic">
                        <option value="less5000">Less than 5,000</option>
                        <option value="5000-10000">5,000 - 10,000</option>
                        <option value="10000-50000">10,000 - 50,000</option>
                        <option value="more50000">More than 50,000</option>
                    </select>

                    <h3>How many conversions do you get per month?</h3>
                    <select name="conversions" id="conversions">
                        <option value="less200">Less than 200</option>
                        <option value="200-500">200 - 500</option>
                        <option value="500-1000">500 - 1,000</option>
                        <option value="more1000">More than 1,000</option>
                        <option value="notsure">Not sure</option>
                    </select>

                    <h3>Current Monthly Ad Spend</h3>
                    <select name="ad-spend" id="ad-spend">
                        <option value="less500">Less than $500</option>
                        <option value="500-1000">$500 - $1,000</option>
                        <option value="1000-5000">$1,000 - $5,000</option>
                        <option value="more5000">More than $5,000</option>
                    </select>

                    <div class="form-navigation">
                        <img src="companylogo.png" alt="Company Logo" class="company-logo">
                        <button type="button" class="prev-btn" onclick="prevStep(2)">Previous</button>
                        <button type="button" class="next-btn" onclick="nextStep(2)">Next</button>
                    </div>
                </div>

                <!-- Step 3: Biggest Conversion Challenge -->
                <div class="form-step" id="step-3">
                    <span class="step-number">03</span>
                    <span class="step-title">Biggest Conversion Challenge?</span>
                    <hr class="left-bold-line">
                    <p class="step-subtitle">(Open-ended for qualification)</p>
                
                    <select name="challenge" id="challenge">
                        <option value="visitorsDontConvert">Visitors don’t convert</option>
                        <option value="dropOffCheckout">People drop off at checkout</option>
                        <option value="highAdCosts">High ad costs, low sales</option>
                        <option value="other">Other</option>
                    </select>
                
                    <label for="growth-timeline">How Soon Do You Want to See Growth?</label>
                    <select name="growth-timeline" id="growth-timeline">
                        <option value="immediately">Immediately</option>
                        <option value="30-60days">Within 30-60 days</option>
                        <option value="3-6months">In 3-6 months</option>
                    </select>
                
                    <label for="contact-method">Preferred Contact Method</label>
                    <select name="contact-method" id="contact-method">
                        <option value="email">Email</option>
                        <option value="call">Call</option>
                        <option value="whatsapp">WhatsApp</option>
                    </select>
                
                    <div class="form-navigation">
                        <img src="companylogo.png" alt="Company Logo" class="company-logo">
                        <button type="button" class="prev-btn" onclick="prevStep(3)">Previous</button>
                        <button type="submit" id="submit-btn" class="submit-btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Thank You Popup -->
    <div class="popup-overlay hidden" id="thank-you-popup">
        <div class="popup-form">
            <h2>Thanks!</h2>
            <p>Our team is reviewing your application.</p>
            <p>If you qualify, we’ll reach out within 24 hours.</p>
            <hr>
            <p>In the meantime, schedule a quick call to discuss your growth potential</p>
            <button class="call-btn">Schedule a Call</button>
            <div class="home-icon" onclick="closeThankYouPopup()">🏠</div>
            <img src="companylogo.png" alt="AENIGM3 Labs" class="popup-logo">
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>