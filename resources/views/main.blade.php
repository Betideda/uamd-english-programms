<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreign Student Admissions | Aleksandër Moisiu University</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('https://uamd.edu.al/wp-content/uploads/2025/06/WhatsApp-Image-2025-06-27-at-16.49.41-1.jpeg');
            background-size: cover;
            background-position: center;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .transition-all {
            transition: all 0.3s ease;
        }

        .faculty-card {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

    </style>
</head>
<body class="font-sans antialiased text-gray-800">
<!-- Header with Logo -->
<header class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <div class="flex items-center">
            <img src=https://uamd.edu.al/wp-content/uploads/2025/06/Alumni-92.png alt="University Logo" class="h-12 w-12 mr-3">
            <div>
                <h1 class="text-xl font-bold text-blue-800">Aleksandër Moisiu University</h1>
                <p class="text-xs text-gray-600">Foreign Student Admissions</p>
            </div>
        </div>
        <nav class="hidden md:block">
            <ul class="flex space-x-8">
                <li><a href="#programs" class="text-blue-800 hover:text-blue-600 transition-all">Programs</a></li>
                <li><a href="#criteria" class="text-blue-800 hover:text-blue-600 transition-all">Admission Criteria</a></li>
                <li><a href="#procedures" class="text-blue-800 hover:text-blue-600 transition-all">Enrollment</a></li>
                <li><a href="#contact" class="text-blue-800 hover:text-blue-600 transition-all">Contact</a></li>
            </ul>
        </nav>
        <button class="md:hidden text-blue-800 text-2xl">
            <i class="fas fa-bars"></i>
        </button>
    </div>
</header>

<!-- Mobile Menu (hidden by default) -->
<div id="mobileMenu" class="hidden bg-white shadow-lg md:hidden">
    <div class="container mx-auto px-4 py-3">
        <ul class="space-y-3">
            <li><a href="#programs" class="block py-2 text-blue-800 hover:text-blue-600">Programs</a></li>
            <li><a href="#criteria" class="block py-2 text-blue-800 hover:text-blue-600">Admission Criteria</a></li>
            <li><a href="#procedures" class="block py-2 text-blue-800 hover:text-blue-600">Enrollment</a></li>
            <li><a href="#contact" class="block py-2 text-blue-800 hover:text-blue-600">Contact</a></li>
        </ul>
    </div>
</div>

<!-- Hero Section -->
<section class="hero text-white py-20 md:py-32">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-6">Welcome International Students</h1>
        <p class="text-xl md:text-2xl mb-8 max-w-3xl mx-auto">Join our diverse academic community and pursue excellence in your chosen field of study.</p>
        <div class="flex flex-col sm:flex-row justify-center gap-4">
            <a href="#criteria" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all">Admission Criteria</a>
            <a href="#contact" class="bg-white hover:bg-gray-100 text-blue-800 px-8 py-3 rounded-lg font-semibold transition-all">Contact Us</a>
        </div>
    </div>
</section>

<!-- Programs Section -->
<section id="programs" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">Our Academic Programs</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Faculty Cards -->


            <a class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/master-of-science-in-quantum-information-technology/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Quantum Information Technology</h3>
                    <p class="text-gray-700">Master of science in "Quantum Information Technology".</p>
                </div>

            </a>


            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/bachelor-in-restaurant-management/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Restaurant Management</h3>
                    <p class="text-gray-700">Bachelor in "Restaurant Management"</p>
                </div>
            </a>

            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/bachelor-in-finance-accounting/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Finance Accounting</h3>
                    <p class="text-gray-700">Bachelor in "Finance Accounting"</p>
                </div>
            </a>

            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/bachelor-in-banking-finance/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Banking Finance</h3>
                    <p class="text-gray-700">Bachelor in "Banking Finance"</p>
                </div>
            </a>

            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/introduction-to-financial-accounting/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Marketing Management</h3>
                    <p class="text-gray-700">Bachelor in "Marketing Management"</p>
                </div>
            </a>

            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="https://uamd.edu.al/course/introduction-to-taxation/" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">Business Administration</h3>
                    <p class="text-gray-700">Bachelor in "Business Administration"</p>
                </div>
            </a>

            <a  class="faculty-card rounded-lg p-6 shadow-md transition-all card-hover" href="" target="_blank">
                <div>
                    <div class="text-blue-800 text-4xl mb-4">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h3 class="text-xl font-bold mb-3">MEP</h3>
                    <p class="text-gray-700">Master of science in "Maritime Environmental Protection And Management".</p>
                </div>
            </a>


        </div>
    </div>
</section>

<!-- Admission Criteria Section -->
<section id="criteria" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">Admission Criteria</h2>

        <div class="grid md:grid-cols-2 gap-8 mb-12">
            <!-- English Programs -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-md transition-all card-hover">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-language text-blue-800 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800">Bachelor Programs in English</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>High school degree or equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Minimum high school CGPA of 7.00/10.00 or equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>English proficiency level B1 (CEFR)</span>
                    </li>
                </ul>
            </div>

            <!-- Albanian Programs -->
            <div class="bg-gray-50 rounded-lg p-6 shadow-md transition-all card-hover">
                <div class="flex items-center mb-4">
                    <div class="bg-blue-100 p-3 rounded-full mr-4">
                        <i class="fas fa-book text-blue-800 text-xl"></i>
                    </div>
                    <h3 class="text-xl font-bold text-blue-800">Bachelor Programs in Albanian</h3>
                </div>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>High school degree or equivalent</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                        <span>Minimum high school CGPA of 6.50/10.00 or equivalent</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- English Proficiency Section -->
        <div class="bg-blue-50 rounded-lg p-6 shadow-md max-w-4xl mx-auto transition-all card-hover">
            <h3 class="text-xl font-bold text-blue-800 mb-4 flex items-center">
                <i class="fas fa-certificate mr-3"></i>
                English Proficiency Requirements
            </h3>
            <p class="mb-4 text-gray-700">English proficiency level B1 according to CEFR in one of the following exams:</p>
            <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>Cambridge</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>IELTS</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>TOEFL iBT</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>TOEFL ITP</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>TOEIC</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>GESE</span>
                </div>
                <div class="bg-white p-3 rounded-lg shadow-sm flex items-center col-span-2">
                    <i class="fas fa-check-circle text-green-500 mr-2"></i>
                    <span>APTIS (4 skills)</span>
                </div>
            </div>
            <p class="mt-4 text-gray-700 italic">Note: Students who completed high school studies entirely in English are exempt from this requirement.</p>
        </div>
    </div>
</section>

<!-- Enrollment Procedures Section -->
<section id="procedures" class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12 text-blue-800">Enrollment Procedures</h2>

        <div class="max-w-4xl mx-auto">
            <!-- Steps -->
            <div class="mb-12">
                <h3 class="text-2xl font-semibold mb-6 text-blue-800 flex items-center">
                    <i class="fas fa-list-ol mr-3"></i>
                    Step-by-Step Process
                </h3>

                <div class="space-y-6">
                    <!-- Step 1 -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">1</div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Application to National Examination Agency</h4>
                            <p class="text-gray-700">Submit documents to obtain equivalence of high school studies:</p>
                            <ul class="list-disc pl-5 mt-2 space-y-1 text-gray-700">
                                <li>Completed Application Form <a target="_blank" style="color: dodgerblue" href="{{asset('application.pdf')}}">(Click here to download the application)</a> </li>
                                <li>Copy of National ID Document</li>
                                <li>Notarized copy of High School Diploma (translated)</li>
                                <li>Notarized copy of High School Grades List (translated)</li>
                                <li>Notarized copy of exam equivalence document</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">2</div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Receive Equivalence Document</h4>
                            <p class="text-gray-700">The Special Commission of the National Examination Agency will issue the document on equivalence of high school studies.</p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">3</div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Apply to UAMD</h4>
                            <p class="text-gray-700">Submit all documents to the UAMD Admission Office.</p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">4</div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Admission Results</h4>
                            <p class="text-gray-700">UAMD announces the list of admitted students for each study program.</p>
                        </div>
                    </div>

                    <!-- Step 5 -->
                    <div class="flex items-start">
                        <div class="bg-blue-100 text-blue-800 font-bold rounded-full w-8 h-8 flex items-center justify-center mr-4 mt-1 flex-shrink-0">5</div>
                        <div>
                            <h4 class="font-semibold text-lg mb-2">Final Registration</h4>
                            <p class="text-gray-700">Complete enrollment by submitting required documents.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Required Documents -->
            <div class="bg-white rounded-lg shadow-md p-6 transition-all card-hover">
                <h3 class="text-2xl font-semibold mb-6 text-blue-800 flex items-center">
                    <i class="fas fa-file-alt mr-3"></i>
                    Required Enrollment Documents
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start">
                        <i class="fas fa-file text-blue-500 mt-1 mr-3"></i>
                        <span>Original High School Diploma and Grade list (with apostille seal, notarized)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-file text-blue-500 mt-1 mr-3"></i>
                        <span>Notarized copy of Diploma Equivalence</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-passport text-blue-500 mt-1 mr-3"></i>
                        <span>Passport Photocopy</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-certificate text-blue-500 mt-1 mr-3"></i>
                        <span>English Certificate (if applicable)</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-id-card text-blue-500 mt-1 mr-3"></i>
                        <span>Notarized Copy of Residence Permit</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-camera text-blue-500 mt-1 mr-3"></i>
                        <span>3 Passport-size Photographs</span>
                    </li>
                    <li class="flex items-start">
                        <i class="fas fa-receipt text-blue-500 mt-1 mr-3"></i>
                        <span>Payment Receipt</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-16 bg-blue-800 text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Contact Admissions Office</h2>

        <div class="max-w-2xl mx-auto text-center">
            <div class="bg-blue-700 rounded-lg p-8 mb-8 inline-block">
                <div class="flex flex-col items-center">
                    <i class="fas fa-envelope text-4xl mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Admissions Email</h3>
                    <a href="mailto:admissions@uamd.edu.al" class="text-white hover:underline text-lg">admissions@uamd.edu.al</a>
                </div>
            </div>

            <div class="space-y-6">
                <div class="flex justify-center items-start">
                    <i class="fas fa-map-marker-alt mt-1 mr-4 text-xl"></i>
                    <span>"Aleksandër Moisiu" University, Durrës, Albania</span>
                </div>

                <div class="flex justify-center items-start">
                    <i class="fas fa-clock mt-1 mr-4 text-xl"></i>
                    <span>Monday-Friday, 8:00 AM - 4:00 PM</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-blue-900 text-white py-8">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="mb-6 md:mb-0">
                <div class="flex items-center">
                    <img src="https://uamd.edu.al/wp-content/uploads/2025/06/Alumni-92.png" alt="University Logo" class="h-10 w-10 mr-3">
                    <div>
                        <h3 class="text-lg font-bold">Aleksandër Moisiu University</h3>
                        <p class="text-sm text-blue-300">Foreign Student Admissions</p>
                    </div>
                </div>
            </div>

            <div class="flex space-x-6">
                <a href="#" class="text-blue-300 hover:text-white transition-all">
                    <i class="fab fa-facebook-f text-xl"></i>
                </a>
                <a href="#" class="text-blue-300 hover:text-white transition-all">
                    <i class="fab fa-twitter text-xl"></i>
                </a>
                <a href="#" class="text-blue-300 hover:text-white transition-all">
                    <i class="fab fa-instagram text-xl"></i>
                </a>
                <a href="#" class="text-blue-300 hover:text-white transition-all">
                    <i class="fab fa-linkedin-in text-xl"></i>
                </a>
            </div>
        </div>

        <div class="border-t border-blue-800 mt-8 pt-6 text-center text-blue-300 text-sm">
            <p>&copy; 2025 Aleksandër Moisiu University. All rights reserved.</p>
        </div>
    </div>
</footer>

<!-- JavaScript for Mobile Menu -->
<script>
    // Mobile menu toggle
    document.querySelector('header button').addEventListener('click', function() {
        const mobileMenu = document.getElementById('mobileMenu');
        mobileMenu.classList.toggle('hidden');
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });

                // Close mobile menu if open
                const mobileMenu = document.getElementById('mobileMenu');
                mobileMenu.classList.add('hidden');
            }
        });
    });
</script>
</body>
</html>
