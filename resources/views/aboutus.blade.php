<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZEUS 808 PRODUCTION AND EVENTS MANAGEMENT, INC.</title>
    <link rel="icon" href="{{ asset('img/zeuslogo.png') }}" type="image/png">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

@include('layouts.header')

<section class="container mx-auto px-6 py-12 pt-32">

    <!-- Company Description -->
    <div class="mb-12 pt-10 text-center px-6">
        <h2 class="text-4xl font-bold italic text-black mb-6">About Us</h2>
        <div class="max-w-4xl mx-auto bg-white text-black p-8 rounded-lg">
            <p class="text-lg leading-relaxed">
                At <span class="text-gold font-semibold">ZEUS 808 Productions</span>, productions and events management company specializes in planning, organizing, and executing various types of events and productions. These can range from corporate events, weddings, and conferences to concerts, festivals, and theatrical productions..  
            </p>
        </div>
    </div>


    <!-- Company History Timelines -->
    <div class="mb-12 pt-20 text-center">
        <h2 class="text-3xl font-bold italic text-black mb-6">Company History Timelines</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10 p-6 relative">
            <!-- Timeline Connector -->
            <div class="absolute top-1/2 left-0 w-full border-t-4 border-dashed border-gray-400 hidden md:block"></div>

            <!-- Timeline Item 2015 -->
            <div class="flex flex-col items-center relative bg-white p-6 shadow-lg rounded-lg border-2 border-black">
                <div class="bg-black text-white text-xl font-bold px-6 py-3 rounded-t-lg">2015</div>
                <div class="w-0 h-0 border-l-[30px] border-r-[30px] border-t-[40px] border-l-transparent border-r-transparent border-t-black"></div>
                <p class="mt-3 text-lg font-semibold text-gray-800">Major Achievement in 2015</p>
                <p class="mt-2 text-gray-700 text-center">
                    In 2015, our company reached a significant milestone that marked a turning point in our journey. 
                    Through dedication, innovation, and hard work, we achieved a major breakthrough that set the 
                    foundation for our continued success. This achievement not only strengthened our position in 
                    the industry but also inspired us to strive for even greater accomplishments. It was a testament 
                    to our commitment to excellence and our ability to adapt, grow, and overcome challenges.
                </p>
            </div>


            <!-- Timeline Item 2020 -->
            <div class="flex flex-col items-center relative bg-white p-6 shadow-lg rounded-lg border-2 border-black">
                <div class="bg-black text-white text-xl font-bold px-6 py-3 rounded-t-lg">2020</div>
                <div class="w-0 h-0 border-l-[30px] border-r-[30px] border-t-[40px] border-l-transparent border-r-transparent border-t-black"></div>
                <p class="mt-3 text-lg font-semibold text-gray-800">Expansion & Innovation</p>
                <p class="mt-2 text-gray-700 text-center">
                    The year 2020 marked a period of remarkable growth and transformation for our company. 
                    Embracing new technologies and innovative strategies, we expanded our operations, reached 
                    new markets, and strengthened our industry presence. This phase of expansion was driven 
                    by our unwavering commitment to delivering excellence, adapting to change, and continuously 
                    evolving to meet the needs of our customers. Despite global challenges, we turned obstacles 
                    into opportunities, setting new benchmarks for innovation and success.
                </p>
            </div>


            <!-- Timeline Item 2025 -->
            <div class="flex flex-col items-center relative bg-white p-6 shadow-lg rounded-lg border-2 border-black">
                <div class="bg-black text-white text-xl font-bold px-6 py-3 rounded-t-lg">2025</div>
                <div class="w-0 h-0 border-l-[30px] border-r-[30px] border-t-[40px] border-l-transparent border-r-transparent border-t-black"></div>
                <p class="mt-3 text-lg font-semibold text-gray-800">Future Goals & Vision</p>
                <p class="mt-2 text-gray-700 text-center">
                    As we look ahead to 2025, our vision is to redefine industry standards through cutting-edge innovation 
                    and sustainable growth. We aim to enhance our global footprint, embrace emerging technologies, and 
                    foster a culture of excellence. Our commitment to continuous improvement will drive us toward greater 
                    efficiency, customer satisfaction, and social responsibility. By staying adaptable and forward-thinking, 
                    we are set to achieve new milestones, ensuring long-term success and a brighter future for all.
                </p>
            </div>

        </div>
    </div>

    <!-- Mission Statement -->
    <div class="flex flex-col md:flex-row items-center md:items-start gap-12 pt-20">
        <div class="md:w-2/3">
            <h2 class="text-3xl font-bold italic text-black mb-6">Our Mission Statement</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                Our mission is to create <span class="text-gold font-bold">unforgettable experiences</span> that connect people, inspire 
                <span class="text-pink-500 font-semibold">creativity</span>, and foster meaningful relationships.  
                We are dedicated to delivering <span class="text-black font-semibold">exceptional event management services</span>  
                through innovation, attention to detail, and a commitment to <span class="text-gold font-semibold">excellence</span>,  
                ensuring that every event reflects our clients' unique vision and goals.
            </p>
        </div> 
        <!-- Mission Image -->
        <div class="md:w-1/3 flex justify-center">
            <div class="border-4 border-black rounded-full w-64 h-64 flex items-center justify-center bg-gray-200 shadow-lg overflow-hidden">
                <img src="{{ asset('img/missionpicture.png') }}" alt="Mission Image" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- Vision Statement -->
    <div class="flex flex-col md:flex-row-reverse items-center md:items-start gap-12 pt-20">
        <div class="md:w-2/3">
            <h2 class="text-3xl font-bold italic text-black mb-6">Our Vision Statement</h2>
            <p class="text-gray-700 leading-relaxed text-lg">
                Our vision is to be a <span class="text-gold font-bold">leading events management company</span> recognized for our  
                <span class="text-pink-500 font-semibold">creativity</span>, <span class="text-black font-semibold">reliability</span>, and  
                <span class="text-gold font-semibold">sustainability</span>.  
                We aspire to redefine the events landscape by harnessing <span class="text-pink-500 font-semibold">cutting-edge technology</span>  
                and <span class="text-black font-semibold">innovative practices</span>, continually exceeding client expectations while  
                contributing positively to our <span class="text-gold font-semibold">communities</span> and the <span class="text-gold font-semibold">environment</span>.
            </p>
        </div> 
        <!-- Vision Image -->
        <div class="md:w-1/3 flex justify-center">
            <div class="border-4 border-black rounded-full w-64 h-64 flex items-center justify-center bg-gray-200 shadow-lg overflow-hidden">
                <img src="{{ asset('img/vissionpicture.png') }}" alt="Vision Image" class="w-full h-full object-cover">
            </div>
        </div>
    </div>
    <br>
    <br>

    <!-- Meet the Team -->
    <div class="mt-12 pt-20 bg-gradient-to-b from-black to-gray-900 text-white py-12">
        <h2 class="text-3xl font-semibold italic text-center text-gold-500 mb-8">Meet the Team</h2>
        <div class="flex items-center justify-between px-4">
            <!-- Left Arrow -->
            <div id="prevBtn" class="cursor-pointer w-10 h-10 border-l-4 border-t-4 border-gold-500 transform -rotate-45"></div>

            <!-- Team Members Container -->
            <div class="overflow-hidden w-[300px] md:w-[900px]">
                <div id="teamSlider" class="flex transition-transform duration-500">
                    <!-- Team Member 1 -->
                    <div class="team-member w-[300px] md:w-[300px] flex-shrink-0 text-center border-2 border-gold-500 p-6 rounded-lg shadow-lg hover:shadow-gold-500 transition duration-300">
                        <div class="w-56 h-80 bg-gray-300 mx-auto rounded-lg overflow-hidden">
                            <img src="{{ asset('img/asnaui.jpg') }}" alt="Rey Arki" class="w-full h-full object-cover">
                        </div>
                        <p class="mt-4 text-lg font-semibold text-gold-500">Asnaui Pangcatan</p>
                        <p class="text-sm text-gray-300 italic">CEO & Founder</p>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="team-member w-[300px] md:w-[300px] flex-shrink-0 text-center border-2 border-gold-500 p-6 rounded-lg shadow-lg hover:shadow-gold-500 transition duration-300">
                        <div class="w-56 h-80 bg-gray-300 mx-auto rounded-lg overflow-hidden">
                            <img src="{{ asset('img/jobeth.jpg') }}" alt="Rey Arki" class="w-full h-full object-cover">
                        </div>
                        <p class="mt-4 text-lg font-semibold text-gold-500">Jobeth Adjaluddin</p>
                        <p class="text-sm text-gray-300 italic">Creative Director</p>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="team-member w-[300px] md:w-[300px] flex-shrink-0 text-center border-2 border-gold-500 p-6 rounded-lg shadow-lg hover:shadow-gold-500 transition duration-300">
                        <div class="w-56 h-80 bg-gray-300 mx-auto rounded-lg overflow-hidden">
                            <img src="{{ asset('img/laurice.jpg') }}" alt="Rey Arki" class="w-full h-full object-cover">
                        </div>
                        <p class="mt-4 text-lg font-semibold text-gold-500">Klaire Lee</p>
                        <p class="text-sm text-gray-300 italic">Event Coordinator</p>
                    </div>
                     <!-- Team Member 4 -->
                     <div class="team-member w-[300px] md:w-[300px] flex-shrink-0 text-center border-2 border-gold-500 p-6 rounded-lg shadow-lg hover:shadow-gold-500 transition duration-300">
                        <div class="w-56 h-80 bg-gray-300 mx-auto rounded-lg overflow-hidden">
                            <img src="{{ asset('img/yume-artist-5.png') }}" alt="Rey Arki" class="w-full h-full object-cover">
                        </div>
                        <p class="mt-4 text-lg font-semibold text-gold-500">Rey Arki</p>
                        <p class="text-sm text-gray-300 italic">Event Coordinator</p>
                    </div>
                </div>
            </div>

            <!-- Right Arrow -->
            <div id="nextBtn" class="cursor-pointer w-10 h-10 border-r-4 border-t-4 border-gold-500 transform rotate-45"></div>
        </div>
    </div>

</section>
@include('layouts.footer')
</body>
<!-- JavaScript -->
<script>
    const teamSlider = document.getElementById("teamSlider");
    const prevBtn = document.getElementById("prevBtn");
    const nextBtn = document.getElementById("nextBtn");

    let index = 0;
    const totalMembers = document.querySelectorAll(".team-member").length;
    const memberWidth = document.querySelector(".team-member").offsetWidth;

    prevBtn.addEventListener("click", () => {
        if (index > 0) {
            index--;
            updateSlider();
        }
    });

    nextBtn.addEventListener("click", () => {
        if (index < totalMembers - 1) {
            index++;
            updateSlider();
        }
    });

    function updateSlider() {
        teamSlider.style.transform = `translateX(-${index * memberWidth}px)`;
    }
</script>
</html>
