<?php
/*
Template Name: Roi-form
*/
get_header();
?>

<div class="container">
    <h2 class="form-title">🚀 Apply for Our 2X ROI Guarantee!</h2>

    <!-- Multi-step Form -->
    <form id="application-form">
        <!-- Step 1: About You -->
        <div class="form-step active" id="step-1">
            <label for="full-name">Full Name*</label>
            <input type="text" id="full-name" name="fullName" required>

            <label for="work-email">Work Email*</label>
            <input type="email" id="work-email" name="workEmail" required>

            <label for="website-url">Website URL*</label>
            <input type="url" id="website-url" name="websiteURL" required>

            <!-- Updated: Added id "next-btn-1" -->
            <button type="button" id="next-btn-1" class="next-btn" onclick="nextStep(1)">Next</button>
        </div>

        <!-- Step 2: Website Traffic -->
        <div class="form-step" id="step-2">
            <label for="traffic">Monthly Website Traffic</label>
            <select name="traffic" id="traffic">
                <option value="less5000">Less than 5,000</option>
                <option value="5000-10000">5,000 - 10,000</option>
                <option value="10000-50000">10,000 - 50,000</option>
                <option value="more50000">More than 50,000</option>
            </select>

            <button type="button" class="prev-btn" onclick="prevStep(2)">Previous</button>
            <button type="button" class="next-btn" onclick="nextStep(2)">Next</button>
        </div>

        <!-- Step 3: Conversion Challenge -->
        <div class="form-step" id="step-3">
            <label for="challenge">Biggest Conversion Challenge?</label>
            <select name="challenge" id="challenge">
                <option value="visitorsDontConvert">Visitors don’t convert</option>
                <option value="dropOffCheckout">People drop off at checkout</option>
                <option value="highAdCosts">High ad costs, low sales</option>
            </select>

            <button type="button" class="prev-btn" onclick="prevStep(3)">Previous</button>
            <button type="submit" id="submit-btn" class="submit-btn">Submit</button>
        </div>
    </form>

    <!-- Thank You Message -->
    <div id="thank-you" class="hidden">
        <h2>Thanks!</h2>
        <p>We’ll review your application and contact you soon.</p>
    </div>
</div>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/f-script.js"></script>

<?php get_footer(); ?>
<script>
document.addEventListener("DOMContentLoaded", () => {
    const form = document.getElementById("application-form");
    const mainPopup = document.getElementById("main-popup");
    const thankYouPopup = document.getElementById("thank-you-popup");

    // Keep track of which step you're on
    let currentStep = 1;
    const totalSteps = 3;

    /***************************************************************
     * POPUP OPEN/CLOSE
     ***************************************************************/
    window.openPopup = function () {
        mainPopup.classList.add("active");
    };

    window.closePopup = function () {
        mainPopup.classList.remove("active");
    };

    window.closeThankYouPopup = function () {
        thankYouPopup.classList.add("hidden");
        thankYouPopup.classList.remove("active");
    };

    mainPopup.addEventListener("click", (event) => {
        if (!mainPopup.querySelector(".popup-form").contains(event.target)) {
            closePopup();
        }
    });
    thankYouPopup.addEventListener("click", (event) => {
        if (!thankYouPopup.querySelector(".popup-form").contains(event.target)) {
            closeThankYouPopup();
        }
    });

    /***************************************************************
     * FORM STEP NAVIGATION
     ***************************************************************/
    function showStep(step) {
        document.querySelectorAll(".form-step").forEach((stepDiv) => {
            stepDiv.classList.remove("active");
        });
        document.getElementById(`step-${step}`).classList.add("active");
    }

    window.nextStep = function (step) {
        if (step < totalSteps) {
            currentStep++;
            showStep(currentStep);
        }
    };

    window.prevStep = function (step) {
        if (step > 1) {
            currentStep--;
            showStep(currentStep);
        }
    };

    /***************************************************************
     * FORM VALIDATION + SUBMISSION
     ***************************************************************/
    if (form) {
        form.addEventListener("input", () => {
            // Only validate if we're on Step 1
            const step1Active = document.getElementById("step-1").classList.contains("active");
            if (!step1Active) return;

            const requiredFields = document.querySelectorAll("#step-1 input[required]");
            const nextBtn1 = document.getElementById("next-btn-1");
            let allFilled = true;

            requiredFields.forEach((field) => {
                if (!field.value.trim()) {
                    allFilled = false;
                }
            });

            nextBtn1.disabled = !allFilled;
        });

        form.addEventListener("submit", (event) => {
            event.preventDefault();
            if (currentStep === totalSteps) {
                closePopup();
                thankYouPopup.classList.remove("hidden");
                thankYouPopup.classList.add("active");
            }
        });
    }
});
</script>
