<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WePlan - uhh we plan??</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap');
        
        body {
            font-family: 'Poppins', sans-serif;
        }
        
        .gradient-bg {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        
        .mood-animation {
            animation: colorShift 3s ease-in-out infinite;
        }
        
        @keyframes colorShift {
            0% { background-color: #ff6b6b; }
            25% { background-color: #4ecdc4; }
            50% { background-color: #45b7d1; }
            75% { background-color: #96ceb4; }
            100% { background-color: #ff6b6b; }
        }
        
        .sock-bounce {
            animation: bounce 2s ease-in-out infinite;
        }
        
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-10px); }
            60% { transform: translateY(-5px); }
        }
        
        .mood-card {
            transition: all 0.3s ease;
        }
        
        .mood-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        .price-card {
            transition: all 0.3s ease;
        }
        
        .price-card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <div class="text-2xl font-bold text-purple-600">🧦 MoodSocks</div>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#features" class="text-gray-700 hover:text-purple-600 transition">Features</a>
                    <a href="#pricing" class="text-gray-700 hover:text-purple-600 transition">Pricing</a>
                    <a href="#app" class="text-gray-700 hover:text-purple-600 transition">App</a>
                    <a href="#contact" class="text-gray-700 hover:text-purple-600 transition">Contact</a>
                </div>
                <button class="bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition">
                    Shop Now
                </button>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="gradient-bg pt-20 pb-16 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-5xl md:text-6xl font-bold mb-6">
                        Wear Your Emotions 
                        <span class="text-yellow-300">Proudly</span>
                    </h1>
                    <p class="text-xl mb-8 opacity-90">
                        Revolutionary socks that change color based on your mood! Connect with your emotions and share your vibe with the world.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4">
                        <button class="bg-yellow-400 text-purple-900 px-8 py-4 rounded-full font-semibold text-lg hover:bg-yellow-300 transition">
                            Get Your MoodSocks - R250
                        </button>
                        <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-purple-600 transition">
                            Watch Demo
                        </button>
                    </div>
                </div>
                <div class="text-center">
                    <div class="relative">
                        <div class="text-9xl sock-bounce">🧦</div>
                        <div class="absolute -top-4 -right-4 w-16 h-16 mood-animation rounded-full"></div>
                        <div class="absolute -bottom-4 -left-4 w-12 h-12 bg-yellow-400 rounded-full animate-pulse"></div>
                    </div>
                    <p class="text-lg mt-4 opacity-80">Currently feeling: <span class="font-semibold text-yellow-300">Excited!</span></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">How MoodSocks Work</h2>
                <p class="text-xl text-gray-600">Advanced emotion-sensing technology meets fashion</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="mood-card bg-gradient-to-br from-pink-100 to-pink-200 p-8 rounded-2xl text-center">
                    <div class="text-5xl mb-4">📱</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Smart Sensing</h3>
                    <p class="text-gray-600">Tiny Bluetooth mood sensor woven into the fabric detects your emotional state through biometric data.</p>
                </div>
                
                <div class="mood-card bg-gradient-to-br from-blue-100 to-blue-200 p-8 rounded-2xl text-center">
                    <div class="text-5xl mb-4">🌈</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Color Magic</h3>
                    <p class="text-gray-600">Watch your socks transform with beautiful color changes that reflect your current mood in real-time.</p>
                </div>
                
                <div class="mood-card bg-gradient-to-br from-green-100 to-green-200 p-8 rounded-2xl text-center">
                    <div class="text-5xl mb-4">📊</div>
                    <h3 class="text-2xl font-semibold mb-4 text-gray-800">Mood Tracking</h3>
                    <p class="text-gray-600">Sync with our app to track mood trends, get insights, and share your sock mood with friends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section id="pricing" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-900 mb-4">Choose Your Mood</h2>
                <p class="text-xl text-gray-600">Find the perfect MoodSocks for your lifestyle</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Basic -->
                <div class="price-card bg-white p-8 rounded-2xl shadow-lg">
                    <div class="text-center">
                        <h3 class="text-2xl font-semibold mb-4">Basic MoodSocks</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">R250</div>
                        <p class="text-gray-600 mb-6">per pair</p>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Color-changing technology</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Bluetooth connectivity</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Basic app features</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> 5 mood colors</li>
                        </ul>
                        <button class="w-full bg-purple-600 text-white py-3 rounded-full hover:bg-purple-700 transition">
                            Order Now
                        </button>
                    </div>
                </div>
                
                <!-- Premium -->
                <div class="price-card bg-gradient-to-br from-purple-600 to-purple-700 p-8 rounded-2xl shadow-xl text-white transform scale-105">
                    <div class="text-center">
                        <div class="bg-yellow-400 text-purple-900 px-3 py-1 rounded-full text-sm font-semibold mb-4 inline-block">
                            MOST POPULAR
                        </div>
                        <h3 class="text-2xl font-semibold mb-4">Premium MoodSocks</h3>
                        <div class="text-4xl font-bold mb-2">R350</div>
                        <p class="opacity-80 mb-6">per pair</p>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-yellow-400 mr-2">✓</span> Everything in Basic</li>
                            <li class="flex items-center"><span class="text-yellow-400 mr-2">✓</span> Custom designs</li>
                            <li class="flex items-center"><span class="text-yellow-400 mr-2">✓</span> 15+ mood colors</li>
                            <li class="flex items-center"><span class="text-yellow-400 mr-2">✓</span> Pattern changes</li>
                            <li class="flex items-center"><span class="text-yellow-400 mr-2">✓</span> Premium app features</li>
                        </ul>
                        <button class="w-full bg-yellow-400 text-purple-900 py-3 rounded-full hover:bg-yellow-300 transition font-semibold">
                            Get Premium
                        </button>
                    </div>
                </div>
                
                <!-- Subscription -->
                <div class="price-card bg-white p-8 rounded-2xl shadow-lg">
                    <div class="text-center">
                        <h3 class="text-2xl font-semibold mb-4">MoodSocks Club</h3>
                        <div class="text-4xl font-bold text-purple-600 mb-2">R150</div>
                        <p class="text-gray-600 mb-6">per month</p>
                        <ul class="text-left space-y-3 mb-8">
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Monthly exclusive socks</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Mood analytics</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Early access to new designs</li>
                            <li class="flex items-center"><span class="text-green-500 mr-2">✓</span> Community access</li>
                        </ul>
                        <button class="w-full bg-purple-600 text-white py-3 rounded-full hover:bg-purple-700 transition">
                            Join Club
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- App Section -->
    <section id="app" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold text-gray-900 mb-6">The MoodSocks App</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Track your emotions, customize your sock colors, and connect with the MoodSocks community.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="bg-purple-100 p-3 rounded-full">
                                <span class="text-2xl">📈</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Mood Analytics</h3>
                                <p class="text-gray-600">Discover patterns in your emotional well-being with beautiful charts and insights.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-purple-100 p-3 rounded-full">
                                <span class="text-2xl">🎨</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Custom Colors</h3>
                                <p class="text-gray-600">Personalize your mood colors and create unique combinations that represent you.</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="bg-purple-100 p-3 rounded-full">
                                <span class="text-2xl">👥</span>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Social Sharing</h3>
                                <p class="text-gray-600">Share your sock mood with friends and join fun challenges in the community.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex space-x-4 mt-8">
                        <button class="bg-black text-white px-6 py-3 rounded-lg hover:bg-gray-800 transition">
                            📱 Download iOS
                        </button>
                        <button class="bg-green-600 text-white px-6 py-3 rounded-lg hover:bg-green-700 transition">
                            🤖 Download Android
                        </button>
                    </div>
                </div>
                
                <div class="text-center">
                    <div class="bg-gradient-to-br from-purple-400 to-purple-600 p-8 rounded-3xl shadow-2xl">
                        <div class="bg-white p-6 rounded-2xl mb-6">
                            <div class="text-4xl mb-4">📊</div>
                            <h3 class="font-semibold text-gray-800 mb-2">Today's Mood</h3>
                            <div class="flex justify-center space-x-2 mb-4">
                                <div class="w-4 h-4 bg-red-400 rounded-full"></div>
                                <div class="w-4 h-4 bg-yellow-400 rounded-full"></div>
                                <div class="w-4 h-4 bg-green-400 rounded-full"></div>
                                <div class="w-4 h-4 bg-blue-400 rounded-full"></div>
                            </div>
                            <p class="text-sm text-gray-600">Mostly Happy 😊</p>
                        </div>
                        <p class="text-white text-lg">Your socks are glowing blue!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 gradient-bg text-white">
        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
            <h2 class="text-4xl font-bold mb-6">Ready to Wear Your Emotions?</h2>
            <p class="text-xl mb-8 opacity-90">
                Join thousands of people who are already expressing themselves with MoodSocks. 
                Start your emotional journey today!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="bg-yellow-400 text-purple-900 px-8 py-4 rounded-full font-semibold text-lg hover:bg-yellow-300 transition">
                    Shop MoodSocks Now
                </button>
                <button class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-purple-600 transition">
                    Join the Club - R150/month
                </button>
            </div>
            <p class="mt-6 text-sm opacity-75">Free shipping worldwide • 30-day happiness guarantee</p>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <div class="text-2xl font-bold mb-4">🧦 MoodSocks</div>
                    <p class="text-gray-400 mb-4">Wear your emotions proudly with revolutionary mood-sensing socks.</p>
                    <div class="flex space-x-4">
                        <button class="text-2xl hover:text-purple-400 transition">📘</button>
                        <button class="text-2xl hover:text-purple-400 transition">📷</button>
                        <button class="text-2xl hover:text-purple-400 transition">🐦</button>
                        <button class="text-2xl hover:text-purple-400 transition">📺</button>
                    </div>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4">Products</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Basic MoodSocks</a></li>
                        <li><a href="#" class="hover:text-white transition">Premium MoodSocks</a></li>
                        <li><a href="#" class="hover:text-white transition">MoodSocks Club</a></li>
                        <li><a href="#" class="hover:text-white transition">Corporate Wellness</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4">Support</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">Help Center</a></li>
                        <li><a href="#" class="hover:text-white transition">Mood Experts Chat</a></li>
                        <li><a href="#" class="hover:text-white transition">Returns & Exchanges</a></li>
                        <li><a href="#" class="hover:text-white transition">Size Guide</a></li>
                    </ul>
                </div>
                
                <div>
                    <h3 class="font-semibold mb-4">Community</h3>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="#" class="hover:text-white transition">MoodSocks Club</a></li>
                        <li><a href="#" class="hover:text-white transition">Challenges</a></li>
                        <li><a href="#" class="hover:text-white transition">Share Your Mood</a></li>
                        <li><a href="#" class="hover:text-white transition">Wellness Blog</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                <p>&copy; 2024 MoodSocks. All rights reserved. Made with 💜 for emotional expression.</p>
            </div>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add interactive hover effects to buttons
        document.querySelectorAll('button').forEach(button => {
            button.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-2px)';
            });
            
            button.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0)';
            });
        });

        // Simulate mood changes in the hero section
        const moodTexts = ['Excited!', 'Happy!', 'Calm!', 'Energetic!', 'Peaceful!'];
        const moodElement = document.querySelector('span.text-yellow-300');
        let currentMood = 0;

        setInterval(() => {
            currentMood = (currentMood + 1) % moodTexts.length;
            if (moodElement) {
                moodElement.textContent = moodTexts[currentMood];
            }
        }, 3000);
    </script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'969d2d2d25d206df',t:'MTc1NDMwMTI5OS4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script></body>
</html>