<?php get_header(); ?>
<!--blog body-->
<div id="Blog-post">
  <!-- banner Page
    ==========================================-->
  <div class="content">
    <div class="about">
            <h1>About Hannah</h1>

            <p>My name is Hannah Sami Juraifani and I am an Interactive Digital Media major at Drexel University. I was born in Saudi Arabia and raised there for 13 years before moving to the US. I have a variety of interests including photography, art, and programming. I'm a fan of Pokemon, Anime (in general), Video Games (in general), Cartoons (in general), Eeveelutions, and Cats. These things inspire me to be more creative in both my art and in my work.</p>

            <p>In terms of my art, I have been drawing since, well, forever but in terms of professional, clean work I've been working on that since starting college. In this site, you'll see some pieces of my artwork in both in my free time and in my classes.</p>

            <p>In terms of my work, I am currently a beginner in web design. I hope by the time I graduate that I'll be proud of the work to show to my potential job offers. This website will showcase my work throughout my time here in college.</p>
        </div>
        <img class="divider" src="<?php echo bloginfo('template_url'); ?>/dist/img/home/divider.png"/>

        <div class="resume">
            <h1>Resume</h1>
            <h2>Education</h2>
                <p>Drexel University, Philadelphia, PA</p>
                <p>Bachelor of Science in Interactive Digital Media, Anticipated Graduation: June 2020</p>
            <h2>Skills</h2>
                <p>Operating Systems: Windows, MacOS</p>
                <p>Languages: HTML, CSS, JavaScript, PHP, MySQL</p>
                <p>Software: Microsoft Office, Adobe Creative Suite</p>
            <h2>Experience</h2>
            <div class="job">
                <p>PaperMill Food Truck App Prototype, Drexel University. Philadelphia, PA</p>
                <p>Project Manager, April - June 2018</p>
                <ul>
                 <li>Managed team of 5 members in a span of 10 weeks with hard deadlines</li>
                 <li>Created a prototype food-ordering app with Flinto</li>
                 <li>Interviewed approximately 25 people on various versions of the prototype</li>
                 <li>Revised prototype after each interview</li>
                </ul>
            </div>
            <div class="job">  
                <p>Freshman Design Project, Drexel University, Philadelphia, PA</p>
                <p>3D Modeler and Project Planner, January - June 2015</p>
                <ul>
                   <li>Created a mod for a game in a team of 6</li>
                   <li>Designed 3D models</li>
                   <li>Managed team schedule for a period of 22 weeks</li>
                </ul>
            </div>
            <h2>Relevant Coursework</h2>
                <p>Creative Concept Design</p> 
                <p>Digital Design Tools</p>
                <p>Interactive Graphics</p> 
                <p>Multimedia Timeline Design</p>
                <p>Scripting for IDM I, II</p> 
                <p>User Experience Design</p>
                <p>User Interface Design I, II</p> 
                <p>Web Design I, II</p>
                <p>Web Game Design</p>
            <h2>Honors and Awards</h2>
                <p>King Abdullah Scholarship Program, Saudi Arabian Ministry of Higher Education (April 2016 – Present)</p>
                <p>A. J. Drexel Scholarship, Drexel University (September 2014 – April 2016)</p>
                <p>Drexel Dragon Award, Drexel University (September 2014 – April 2016)</p>
            <h2>Activities</h2>
                <p>Secretary, Dragon Spark - May 2015 - June 2018</p>
                <p>Vice President, Dragon Spark - June 2018 - Present</p>
                <p>Graphic Designer, Japanese Undergraduate Students Association - June 2018 - Present</p>
        </div>
        <div class="recentWorks">
            <picture>
              <source media="(min-width: 768px)" srcset="<?php echo bloginfo('template_url'); ?>/dist/img/home/focusArea.png"/>
               <img class="focusArea" src="<?php echo bloginfo('template_url'); ?>/dist/img/home/focusArea320.png" />
             </picture>
            <div class="works">
                <div class="work">
                    <h2>Space Cowboy</h2>
                    <a href="http://hannahjuraifani.com/idm250/space-cowboy/"><img src="<?php echo bloginfo('template_url'); ?>/dist/img/photos/preview/spaceKitty.png"/></a>
                    <p>A cat from Philadelphia's Kawaii Kitty Cafe. This cat gives some sort of cowboy vibe to me. Why space? ...</p>
                </div>
                <div class="work">
                    <h2>Napping Kitty</h2>
                    <a href="http://hannahjuraifani.com/idm250/napping-kitty/"><img src="<?php echo bloginfo('template_url'); ?>/dist/img/photos/preview/nappingKitty.png"/></a>
                    <p>This is a napping cat found at Philadelphia's Kawaii Kitty Cafe...</p>
                </div>
            </div>
        </div>
        
    </div>
  </div>
</div>
<?php get_footer(); ?>