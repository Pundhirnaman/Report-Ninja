<?php
// Define our services (would typically come from DB in real app)
$left_services = [
    ['title' => 'Custom Website Design', 'desc' => 'Tailored website solutions that reflect your brand identity', 'icon' => 'Palette'],
    ['title' => 'E-Commerce Integration', 'desc' => 'Seamless shopping cart and payment solutions', 'icon' => 'ShoppingCart'],
    ['title' => 'CMS Implementation', 'desc' => 'Manage content easily with powerful admin panels', 'icon' => 'LayoutDashboard'],
    ['title' => 'API Development', 'desc' => 'Secure, efficient API services for your business', 'icon' => 'Code2']
];

$right_services = [
    ['title' => 'Report Automation', 'desc' => 'Automate repetitive reports to save time', 'icon' => 'FileText'],
    ['title' => 'Data Visualization', 'desc' => 'Turn complex data into meaningful insights', 'icon' => 'BarChart4'],
    ['title' => 'Excel Automation', 'desc' => 'Automate Excel workflows with VBA', 'icon' => 'Table2'],
    ['title' => 'Dashboard Design', 'desc' => 'Interactive dashboards for real-time metrics', 'icon' => 'Monitor']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Solutions | Professional Services</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body class="bg-gray-50">
    <main class="max-w-7xl mx-auto px-4 py-12">
        <!-- Hero Section -->
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Our Solutions</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">Bridging creativity and technology to deliver exceptional results</p>
        </div>

        <!-- Services Grid -->
        <div class="flex flex-col md:flex-row gap-8">
            <!-- Left Services Column -->
            <div class="flex-1 space-y-8">
                <?php foreach ($left_services as $service): ?>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <i data-lucide="<?= $service['icon'] ?>" class="w-8 h-8 text-indigo-600 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800"><?= $service['title'] ?></h3>
                    </div>
                    <p class="text-gray-600"><?= $service['desc'] ?></p>
                    <a href="learnmore.php" class="mt-4 px-4 py-2 bg-indigo-100 text-indigo-700 rounded-lg hover:bg-indigo-200 transition-colors inline-block">
    Learn More
</a>

                </div>
                <?php endforeach ?>
            </div>

            <!-- Central Solution Showcase -->
            <div class="flex-1 max-w-md mx-4 flex flex-col items-center justify-center">
                <div class="relative w-full h-full min-h-[500px] bg-gradient-to-br from-indigo-500 to-purple-600 rounded-2xl p-8 text-center flex flex-col justify-center shadow-lg">
                    <h2 class="text-4xl font-bold text-white mb-6">Our Solution</h2>
                    <p class="text-indigo-100 mb-8 text-lg">
                        Comprehensive digital services to take your business to the next level with innovative web solutions and smart automation.
                    </p>
                    
                    <!-- Graph Placeholder -->
                    <div class="bg-white/20 rounded-lg p-4 backdrop-blur-sm">
                        <canvas id="solutionChart" class="w-full h-64"></canvas>
                    </div>

                    <!-- Insights -->
                    <div class="mt-8 text-left">
                        <h3 class="text-white font-semibold mb-2">Key Insights:</h3>
                        <ul class="text-indigo-100 space-y-2">
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mt-0.5 text-white mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>87% increase in efficiency with our automation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mt-0.5 text-white mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>3x faster report generation</span>
                            </li>
                            <li class="flex items-start">
                                <svg class="w-5 h-5 mt-0.5 text-white mr-2 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                                <span>Custom analytics dashboards for all clients</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right Services Column -->
            <div class="flex-1 space-y-8">
                <?php foreach ($right_services as $service): ?>
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow">
                    <div class="flex items-center mb-4">
                        <i data-lucide="<?= $service['icon'] ?>" class="w-8 h-8 text-indigo-600 mr-4"></i>
                        <h3 class="text-xl font-semibold text-gray-800"><?= $service['title'] ?></h3>
                    </div>
                    <p class="text-gray-600"><?= $service['desc'] ?></p>
                    <a href="reports.php" class="mt-4 px-4 py-2 bg-indigo-100 text-indigo-700 rounded-lg hover:bg-indigo-200 transition-colors inline-block">
    Learn More
</a>
                </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- Client Success Section -->
        <div class="mt-20">
            <h2 class="text-3xl font-bold text-center mb-12">Client Success Stories</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/5146379a-f335-47ab-85c4-1e83070d6012.png" alt="Portrait of John Smith, CEO of TechCorp, a middle-aged man with glasses" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">John Smith</h4>
                            <p class="text-sm text-gray-500">CEO, TechCorp</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Automated reporting saved us 20 hours per week. The dashboards give us real-time visibility into our KPIs."</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/36de0b3e-8009-4ad7-be1a-390d4df92175.png" alt="Portrait of Sarah Johnson, Marketing Director at GrowthLab, a woman smiling in business attire" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">Sarah Johnson</h4>
                            <p class="text-sm text-gray-500">Director, GrowthLab</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"Our new website increased conversion rates by 45%. The design perfectly captures our brand voice."</p>
                </div>
                
                <div class="bg-white p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <div class="flex items-center mb-4">
                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/ffd7dd93-9bee-4528-807a-16ee268966d0.png" alt="Portrait of Michael Chen, COO of DataPlus, a man in his 40s wearing a blue shirt" class="w-12 h-12 rounded-full mr-4">
                        <div>
                            <h4 class="font-medium">Michael Chen</h4>
                            <p class="text-sm text-gray-500">COO, DataPlus</p>
                        </div>
                    </div>
                    <p class="text-gray-700 italic">"The API integration streamlined our e-commerce operations while reducing errors by 70%."</p>
                </div>
            </div>
        </div>
    </main>

    <script>
        // Initialize Lucide icons
        lucide.createIcons();
        
        // Initialize charts
        document.addEventListener('DOMContentLoaded', function() {
            // Solution Impact Chart
            const ctx = document.getElementById('solutionChart').getContext('2d');
            const solutionChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Before', 'After Implementation'],
                    datasets: [{
                        label: 'Hours Spent on Reports',
                        data: [20, 5],
                        backgroundColor: [
                            'rgba(255, 255, 255, 0.7)',
                            'rgba(255, 255, 255, 0.9)'
                        ],
                        borderColor: [
                            'rgba(255, 255, 255, 1)',
                            'rgba(255, 255, 255, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                color: 'rgba(255, 255, 255, 0.8)'
                            },
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            }
                        },
                        x: {
                            ticks: {
                                color: 'rgba(255, 255, 255, 0.8)'
                            },
                            grid: {
                                color: 'rgba(255, 255, 255, 0.1)'
                            }
                        }
                    }
                }
            });
        });
    </script>
</body>
</html>

