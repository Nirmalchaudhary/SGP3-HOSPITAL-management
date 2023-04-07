<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="blog_detail.css">
  <link rel="stylesheet" href="blog_landing.css">
  <link rel="stylesheet" href="copyright.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="quick_navbar_arrow.css">
  <title>Blog Page</title>
  <!-- for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- starting of navbar -->
  <link rel="stylesheet" href="/Blog_page_css/navbar.css">
  <!-- ending of navbar -->
  <!-- starting of blog -->
  <link rel="stylesheet" href="/Blog_page_css/blog_landing.css">
  <!-- Blog page End -->
  <!-- Blog Details Start -->
  <link rel="stylesheet" href="/Blog_page_css/blog_detail.css">
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

  <!-- Blog Details End -->
  <!-- starting of footer -->
  <link rel="stylesheet" href="/Blog_page_css/footer.css">
  <!-- ending of footer -->
  <!-- Quick Navbar Arrow Start -->
  <link rel="stylesheet" href="/Blog_page_css/quick_navbar_arrow.css">
  <!-- Quick Navbar Arrow End -->
  <!-- Copyright Start -->
  <link rel="stylesheet" href="/Blog_page_css/copyright.css">
  <!-- Copyright End -->
</head>

<body>
  <?php
   include '_nav.php';
   ?>
  <div id="dr_landing">
    <div class="dr_wel">
      <h2>Meet our qualified Doctors</h2>
      <ul>
        <li id="dr_home"><a href="index.php">Home</a></li>
        <li><i class="fas fa-angle-right"></i></li>
        <li><a>Blogs</a></li>
      </ul>
    </div>
  </div>
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4" style=" margin-bottom: -120px;">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
              src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8ZG9jdG9yc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Know you Anaesthesiologist: the doctor
                behind your Surgeries</h1>
              <p class="leading-relaxed mb-3">There are surgeons for all surgical procedures; minor or major, elective
                or emergency, critical or
                non critical. For most of the patients the surgeons are the star performers or the superheroes.</p>
              <div class="flex items-center flex-wrap ">
                <a href="https://www.maxhealthcare.in/blogs/know-your-anaesthesiologist-doctor-behind-your-surgical-hero"
                  target="_blank" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8ZG9jdG9yc3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
              alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Emergency: How to do CPR on an adult!</h1>
              <p class="leading-relaxed mb-3">Cardiopulmonary resuscitation (CPR) is a lifesaving technique useful in
                many emergencies, including heart attack or near drowning, in which someone's breathing or heartbeat has
                stopped. Knowing how to perform CPR on an adult could save a life.</p>
              <div class="flex items-center flex-wrap">
                <a href="https://www.maxhealthcare.in/blogs/emergency-how-do-cpr-adult" target="_blank"
                  class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/team-paramedic-firs-aid-accident-on-road-ambulance-emergency-service-picture-id1339395718?b=1&k=20&m=1339395718&s=170667a&w=0&h=QrZzBC2SsW2zY0ptvpJWrgCtQnHoU-tWJ38QxeMzwRA="
              alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">The Golden 60 minutes after accident
                (Inforgraphic)!</h1>
              <p class="leading-relaxed mb-3">The "First Hour" after a traumatic injury or accident is the golden time
                period of saving someone's life. A prompt action can increase the survival rate and prevent death. But,
                do you know that only 20% patients receive immediate intervention after accident?
              </p>
              <div class="flex items-center flex-wrap ">
                <a href="https://www.maxhealthcare.in/blogs/golden-60-minutes-after-accident-infographic"
                  target="_blank" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container px-5 py-24 mx-auto">
      <div class="flex flex-wrap -m-4">
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/human-kidney-cross-section-on-scientific-background-picture-id1168363665?b=1&k=20&m=1168363665&s=170667a&w=0&h=q749KiWQcAO6GR2zyqE4Rp_uWoyRZESJaOyZigCAO7k="
              alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Kidneys are vital for life‘ says, Dr. Puneet
                Arora</h1>
              <p class="leading-relaxed mb-3">The role of the kidneys is often underrated when we think about our
                health. In fact, kidneys play a significant part in the daily functioning of our body. With an objective
                to educate people about healthy kidneys Dr. Puneet Arora,...</p>
              <div class="flex items-center flex-wrap ">
                <a href="https://www.maxhealthcare.in/blogs/kidneys-are-vital-life-says-dr-puneet-arora" target="_blank"
                  class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/hologram-brain-cancer-cells-view-picture-id1373119600?b=1&k=20&m=1373119600&s=170667a&w=0&h=xo7DnKHquLg02de6QW6zn_COJB5XorRVGAaF4HpB3zI="
              alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Meningioma Brain Tumors: Answers to commonly
                asked questions</h1>
              <p class="leading-relaxed mb-3">A meningioma tumor can be a severe condition, as it typically occurs on
                the brain, which means it causes a number of other serious conditions.</p>
              <div class="flex items-center flex-wrap">
                <a href="https://www.maxhealthcare.in/blogs/meningioma-brain-tumors-answers-commonly-asked-questions"
                  target="_blank" class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="p-4 md:w-1/3">
          <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-48 md:h-36 w-full object-cover object-center" src="https://media.istockphoto.com/photos/3d-virus-illustration-picture-id1127490587?b=1&k=20&m=1127490587&s=170667a&w=0&h=9ofDNmBoFJp_szs6vIASxqe-cLwIShDFMuNDO14rx2M="
              alt="blog">
            <div class="p-6">
              <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">CATEGORY</h2>
              <h1 class="title-font text-lg font-medium text-gray-900 mb-3">How to protect yourself from Swine Flu?</h1>
              <p class="leading-relaxed mb-3">Swine flu is a respiratory infection caused by a virus which usually
                infects pigs. The virus is highly contagious and can survive in the environment for days. It is not
                unusual for people to get the infection.</p>
              <div class="flex items-center flex-wrap ">
                <a href="https://www.maxhealthcare.in/blogs/how-protect-yourself-swine-flu" target="_blank"
                  class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">Learn More
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none"
                    stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
                <span
                  class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                    <circle cx="12" cy="12" r="3"></circle>
                  </svg>1.2K
                </span>
                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                  <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round"
                    stroke-linejoin="round" viewBox="0 0 24 24">
                    <path
                      d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                    </path>
                  </svg>6
                </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

        <?php
           include '_footer.php';
        ?>
  <!-- start of navbar -->
  <div id="quick_navbar_btn">
    <a href="#for_quick_arrow">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- end of navbar -->
  <!-- start of copyright -->
  <?php
   include '_copyright.php';
   ?>
  <!-- end of copyright -->

</body>

</html>

