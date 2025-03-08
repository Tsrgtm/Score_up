<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title' , 'Login')</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            #carouselContainer {
                position: relative;
                width: 100%; /* Full width for the carousel */
            }

            .slide {
                min-width: 100%; /* Each slide takes up the full width of the carousel */
                transition: transform 0.5s ease-in-out; /* Smooth transition for sliding */
            }

        </style>
    </head>
    <body class="bg-white transition-all duration-300">
        <main class="grid grid-cols-5 min-h-screen">
            <div id="tipContainer" class="relative col-span-2 w-full h-screen bg-gradient-to-b from-amber-400 to-amber-600 text-white shadow-lg transform transition-transform duration-300 mx-auto hidden lg:flex flex-col justify-center px-16">
                <p class="font-semibold text-lg mb-8">#SOME QUICK TIPS</p>
                <div id="carouselContainer" class="relative w-full overflow-hidden">
                    <div id="carouselTrack" class="flex transition-transform duration-500 ease-in-out">
                        <!-- Slides will be appended here by JavaScript -->
                    </div>
                    <div class="carausel-btn flex gap-3 mt-8">
                        <button id="prevButton" class="bg-gray-200 text-black p-2 rounded-full">
                            <x-heroicon-s-arrow-left class="w-6 h-6" />
                        </button>
                        <button id="nextButton" class="bg-gray-200 text-black p-2 rounded-full">
                            <x-heroicon-s-arrow-right class="w-6 h-6" />
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-span-full lg:col-span-3 max-w-lg mx-auto w-full flex items-center relative">
                <div class="flex gap-4 justify-between items-center absolute top-8 w-full px-4 lg:p-0">
                    <a href="{{ route('home') }}" class="text-2xl font-bold text-slate-700">Logo</a>
                    <a href="{{ route('home') }}" class="uppercase font-medium text-slate-600 hover:text-slate-800 flex gap-2 items-center text-sm">
                        <x-heroicon-s-arrow-left class="w-4 h-4" />
                        Back Home
                    </a>
                </div>
                <div class="px-4 py-24 max-w-sm w-full mx-auto">
                    <div class="mb-8">
                        <h2 class="text-3xl font-bold">@yield('auth-title')</h2>
                    </div>

                    <div>
                        @yield('content')
                    </div>
                </div>
                <div class="text-center absolute bottom-8 w-full">
                    <p class="text-slate-600 text-sm">&copy; Copyright {{ date('Y') }} Score Up</p>
                </div>
            </div>
        </main>


        <script>
            const detTips = [
                {
                    heading: "Understand the Test Format",
                    details: "Familiarize yourself with the structure of the exam, including sections and question types. Knowing what to expect can reduce anxiety. For example, review sample questions to get comfortable with the format and timing. This preparation allows you to navigate each section confidently during the actual test."
                },
                {
                    heading: "Create a Study Schedule",
                    details: "Establish a daily study routine that allocates specific times for different skills (reading, writing, listening, speaking). Consistency is key. For instance, dedicate 30 minutes each day to practice vocabulary and another 30 minutes to reading comprehension exercises."
                },
                {
                    heading: "Focus on Weaknesses",
                    details: "Identify your weak areas and concentrate your efforts there. Use practice tests to pinpoint where you struggle. For example, if you find listening difficult, spend more time on listening exercises and seek out resources that specifically target this skill."
                },
                {
                    heading: "Use Authentic Materials",
                    details: "Engage with real-world materials such as newspapers, podcasts, and videos. This exposure helps you understand context and usage. For example, read articles from reputable sources or watch documentaries in English to improve both vocabulary and comprehension."
                },
                {
                    heading: "Practice Active Listening",
                    details: "Listen attentively to spoken English by engaging with various audio materials. Summarize what you've heard afterward to reinforce comprehension. For instance, listen to TED Talks and note down key points or arguments presented by the speakers."
                },
                {
                    heading: "Expand Your Vocabulary",
                    details: "Learn new words daily and use them in sentences to reinforce their meanings. For example, create flashcards with new vocabulary and review them regularly. Additionally, try to incorporate these words into your writing and speaking practice."
                },
                {
                    heading: "Engage in Speaking Practice",
                    details: "Practice speaking English regularly with friends or language partners. Discuss various topics to build fluency. For example, set aside time each week to talk about your favorite books or movies, focusing on expressing your thoughts clearly."
                },
                {
                    heading: "Write Regularly",
                    details: "Develop your writing skills by maintaining a journal or writing essays on different topics. Focus on clarity and structure. For instance, write a short essay about your last vacation, ensuring you include an introduction, body paragraphs, and a conclusion."
                },
                {
                    heading: "Take Practice Tests",
                    details: "Simulate exam conditions by taking practice tests under timed conditions. This helps manage time effectively during the actual exam. For example, complete a full-length practice test every week to build stamina and familiarize yourself with the test format."
                },
                {
                    heading: "Join Study Groups",
                    details: "Collaborate with peers who are also preparing for the same exam by forming study groups. Sharing resources and discussing topics can enhance understanding. For instance, hold weekly meetings where each member presents a topic or question for discussion."
                },
                {
                    heading: "Utilize Online Resources",
                    details: "Leverage online platforms that offer practice exercises tailored for English exams. Websites often provide quizzes and interactive activities. For example, use language learning apps for daily practice in vocabulary building or grammar exercises."
                },
                {
                    heading: "Practice Reading Comprehension",
                    details: "Read various texts in English and answer comprehension questions afterward. This will prepare you for reading sections in exams. For instance, read short stories or articles and summarize their main ideas in your own words."
                },
                {
                    heading: "Record Yourself Speaking",
                    details: "Recording your speech can help identify areas for improvement such as pronunciation and pacing. Listen back critically to assess your performance; for example, record yourself discussing a topic for two minutes and evaluate clarity and fluency."
                },
                {
                    heading: "Learn Common Idioms",
                    details: "Familiarize yourself with common idiomatic expressions used in everyday English conversations. Understanding idioms can enhance comprehension during speaking tasks; for instance, knowing phrases like 'break the ice' can help in informal conversations."
                },
                {
                    heading: "Use Grammar Check Tools",
                    details: "Utilize online grammar checkers when writing essays or paragraphs. These tools help identify grammatical errors and improve writing skills over time; for example, use tools like Grammarly to refine your written work before submission."
                },
                {
                    heading: "Practice Skimming Techniques",
                    details: "Develop skimming techniques by quickly reading through texts to grasp main ideas without focusing too much on smaller details; this skill is useful during timed reading sections of exams where quick comprehension is necessary."
                },
                {
                    heading: "Engage with Native Speakers",
                    details: "If possible, converse with native speakers through language exchange apps; real-life conversations enhance fluency and confidence in speaking while providing insights into colloquial language use."
                },
                {
                    heading: "Stay Updated on Current Events",
                    details: "Reading about current events not only improves vocabulary but also provides context for discussions during speaking tasks on the test; for instance, follow news outlets online or subscribe to newsletters that summarize key events."
                },
                {
                    heading: "Use Mind Maps for Study Topics",
                    details: "Create mind maps when studying complex topics; this visual representation helps organize thoughts and improves retention of information by connecting related concepts together visually."
                },
                {
                    heading: "Analyze Sample Responses",
                    details: "Review sample responses for writing tasks; understanding what constitutes a high-scoring response can guide your writing practice effectively by highlighting key elements such as coherence and grammar usage."
                },
                {
                    heading:"Incorporate Fun into Learning", 
                    details:"Make studying enjoyable by incorporating games or quizzes into your routine; this keeps motivation high while learning new material through interactive methods." 
                }, 
                { 
                    heading:"Practice Fill-in-the-Blank Exercises", 
                    details:"Engage in exercises where you fill in missing words from sentences or passages; this reinforces vocabulary usage in context and prepares you for similar questions on the test." 
                }, 
                { 
                    heading:"Reflect on Progress Regularly", 
                    details:"Take time each week to assess what you've learned; adjusting your study plan based on progress made can help target areas needing improvement." 
                }, 
                { 
                    heading:"Stay Hydrated", 
                    details:"Drink plenty of water while studying; staying hydrated supports cognitive function and concentration during long study sessions." 
                }, 
                { 
                    heading:"Explore Different Accents", 
                    details:"Listen to speakers from various regions (e.g., British, American) to become accustomed to different accents and pronunciations which may be encountered in listening sections." 
                }, 
                { 
                    heading:"Practice Writing Descriptions", 
                    details:"Watch news videos containing graphs and tables and practice writing descriptions of what you’ve learnt; this enhances both vocabulary and writing skills." 
                }, 
                { 
                    heading:"Use Visual Aids", 
                    details:"Incorporate visual aids like charts or diagrams when studying complex topics; visuals enhance understanding of relationships between concepts." 
                }, 
                { 
                    heading:"Stay Positive", 
                    details:"Maintain a positive mindset throughout preparation; celebrating small victories keeps motivation high! Remind yourself of progress made regularly." 
                },  
                {  
                    heading:"Learn What Your Common Mistakes Are",  
                    details:"Take careful note of mistakes – regularly write down mistakes you keep making (both speaking and writing) so you can focus on improving those areas."  
                },  
                {  
                    heading:"Embrace Mistakes as Learning Opportunities",  
                    details:"View mistakes as stepping stones rather than setbacks—they're part of the learning process! Analyze errors constructively."  
                },  
                {  
                    heading:"Practice Active Listening",  
                    details:"Engage actively while listening by taking notes; this reinforces comprehension during listening exercises while helping retain important information."  
                },  
                {  
                    heading:"Set Specific Study Goals",  
                    details:"Establish clear study goals for each session to keep yourself focused and motivated; aim for measurable outcomes like completing specific exercises."  
                },  
                {  
                    heading:"Record Yourself Telling Stories",  
                    details:"Record yourself talking about your experiences; listen back critically to assess grammar usage and pronunciation improvements over time."  
                },  
                {  
                    heading:"Use Grammar Reference Books",  
                    details:"Keep grammar reference books handy while studying; they can clarify rules when you're unsure about specific grammatical structures."  
                },  
                {  
                    heading:"Practice Describing Images",  
                    details:"Look at random images and describe them out loud; this enhances both vocabulary recall ability as well as speaking fluency."  
                },   
                {   
                    heading:"Engage in Role-Playing Scenarios",   
                    details:"Role-play common scenarios (e.g., ordering food) with friends or classmates to build confidence in speaking through practical application."   
                },   
                {   
                    heading:"Take Regular Breaks",   
                    details:"Incorporate short breaks into your study sessions; this helps maintain focus over longer periods while preventing burnout from fatigue."   
                }
            ];


            const tipsContainer = document.getElementById("carouselTrack");
            const prevButton = document.getElementById("prevButton");
            const nextButton = document.getElementById("nextButton");

            // Initial state
            let currentIndex = Math.floor(Math.random() * detTips.length); // Random initial index

            // Function to render a slide
            function renderSlide(index) {
                const tip = detTips[index];
                const slide = document.createElement("div");
                slide.className = "slide flex-shrink-0 w-full flex items-center justify-center text-md lg:text-lg ";

                const contentWrapper = document.createElement("div");
                contentWrapper.className = "flex flex-col justify-center";

                const heading = document.createElement("h2");
                heading.className = "text-3xl font-bold text-montserrat mb-3";
                heading.innerText = tip.heading;

                const details = document.createElement("p");
                details.innerText = tip.details;

                contentWrapper.appendChild(heading);
                contentWrapper.appendChild(details);
                slide.appendChild(contentWrapper);

                return slide;
            }

            // Function to update the carousel
            function updateCarousel() {
                // Clear the current slide
                tipsContainer.innerHTML = '';

                // Render the new slide
                const newSlide = renderSlide(currentIndex);
                tipsContainer.appendChild(newSlide);
            }

            // Next and Previous button functionality
            nextButton.addEventListener("click", () => {
                currentIndex = (currentIndex + 1) % detTips.length; // Loop back to start
                updateCarousel();
            });

            prevButton.addEventListener("click", () => {
                currentIndex = (currentIndex - 1 + detTips.length) % detTips.length; // Loop back to end
                updateCarousel();
            });

            // Initial render
            updateCarousel();


        </script>
    </body>
</html>
