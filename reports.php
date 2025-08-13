<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Automation</title>
<style>
    body { font-family: Arial, sans-serif; margin:0; padding:0; background:#f9f9f9; color:#333; }
    header { background:#2b6cb0; color:white; padding:20px; text-align:center; }
    section { padding:50px 20px; max-width:1200px; margin:auto; }
    h1, h2 { text-align:center; color:#2b6cb0; }
    p { text-align:center; max-width:700px; margin:auto; }
    .pricing-wrapper { position: relative; }
    .pricing-container { display:flex; flex-wrap:nowrap; overflow-x:auto; scroll-behavior: smooth; padding-bottom: 10px; }
    .pricing-card {
        background:white; border-radius:10px; box-shadow:0 4px 10px rgba(0,0,0,0.1);
        margin:15px; flex:0 0 280px; text-align:center; padding:20px; box-sizing:border-box;
    }
    .pricing-card h3 { color:#2b6cb0; }
    .price { font-size:28px; font-weight:bold; margin:15px 0; color:#e53e3e; }
    ul { list-style:none; padding:0; text-align:left; }
    ul li { padding:8px 0; border-bottom:1px solid #ddd; }
    button {
        background:#2b6cb0; color:white; padding:10px 20px; border:none;
        border-radius:5px; cursor:pointer;
    }
    button:hover { background:#1a4d80; }
    .slider-btn {
        position: absolute; top: 50%; transform: translateY(-50%);
        background: rgba(43,108,176,0.8); color: white; border: none;
        border-radius: 50%; width: 40px; height: 40px; cursor: pointer;
        font-size: 20px; line-height: 38px; text-align: center;
    }
    .slider-btn:hover { background: rgba(26,77,128,0.9); }
    .prev-btn { left: -20px; }
    .next-btn { right: -20px; }
</style>
</head>
<body>

<header>
    <h1>Report Automation</h1>
    <p>Automate repetitive reports to save time & reduce errors</p>
</header>

<section>
    <h2>Our Plans</h2>
    <p>Choose a plan that suits your reporting needs. All packages include scheduled report generation and customizable output formats.</p>

    <div class="pricing-wrapper">
        <button class="slider-btn prev-btn">&#10094;</button>
        <div class="pricing-container" id="pricingSlider">
            <div class="pricing-card">
                <h3>Basic</h3>
                <div class="price">$149</div>
                <ul>
                    <li>Daily automated reports</li>
                    <li>Excel & PDF export</li>
                    <li>Email delivery</li>
                    <li>Basic templates</li>
                </ul>
                <a href="https://wa.me/919518432149?text=Hi+I+am+interested+in+Report+Ninja" target="_blank">
          <button class="bg-white text-blue-900 px-6 py-3 rounded hover:bg-gray-200 mt-4">Get Started</button>
        </a>
            </div>

            <div class="pricing-card">
                <h3>Standard</h3>
                <div class="price">$249</div>
                <ul>
                    <li>Hourly or custom schedule</li>
                    <li>Excel, PDF, CSV export</li>
                    <li>Custom templates</li>
                    <li>Multi-user support</li>
                </ul>
                <a href="https://wa.me/919518432149?text=Hi+I+am+interested+in+Report+Ninja" target="_blank">
          <button class="bg-white text-blue-900 px-6 py-3 rounded hover:bg-gray-200 mt-4">Get Started</button>
        </a>
            </div>

            <div class="pricing-card">
                <h3>Premium</h3>
                <div class="price">$399</div>
                <ul>
                    <li>Real-time report updates</li>
                    <li>Cloud storage integration</li>
                    <li>Advanced data visualization</li>
                    <li>24/7 priority support</li>
                </ul>
                <a href="https://wa.me/919518432149?text=Hi+I+am+interested+in+Report+Ninja" target="_blank">
          <button class="bg-white text-blue-900 px-6 py-3 rounded hover:bg-gray-200 mt-4">Get Started</button>
        </a>
            </div>

            <div class="pricing-card">
                <h3>Enterprise</h3>
                <div class="price">$599</div>
                <ul>
                    <li>Custom automation workflows</li>
                    <li>Unlimited scheduled reports</li>
                    <li>API & system integration</li>
                    <li>Dedicated account manager</li>
                    <li>On-site training</li>
                </ul>
               <a href="https://wa.me/919518432149?text=Hi+I+am+interested+in+Report+Ninja" target="_blank">
          <button class="bg-white text-blue-900 px-6 py-3 rounded hover:bg-gray-200 mt-4">Get Started</button>
        </a>
            </div>
        </div>
        <button class="slider-btn next-btn">&#10095;</button>
    </div>
</section>

<script>
    const slider = document.getElementById('pricingSlider');
    const prevBtn = document.querySelector('.prev-btn');
    const nextBtn = document.querySelector('.next-btn');

    prevBtn.addEventListener('click', () => {
        slider.scrollBy({ left: -300, behavior: 'smooth' });
    });

    nextBtn.addEventListener('click', () => {
        slider.scrollBy({ left: 300, behavior: 'smooth' });
    });
</script>

</body>
</html>
