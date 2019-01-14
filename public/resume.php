<?php
require '../core/functions.php';
$meta = [];
$meta['title']='Marcus Resume';
$meta['description']= 'Marcus Resume';

$content = <<<EOT
      <main>
      <h1>Marcus C Hawthorne</h1>
                  <div>
                       <a href="https://www.linkedin.com/in/marcuschawthorne"/>LinkedIn</a>
                      &#x25CF;  
                      Schererville, IN
                  </div>
                 
                    <h2>Full Stack Web and Hybrid Mobile Applications Developer</h2>
                  <p>Full stack web and hybrid mobile appliactions developer specializing in full stack JavaScript application and architectures.  Experienced in all stages of the development life cycle, well versed in numerous programming languages.</p>
                  <ul>
                      <li>Full Stack Development</li>
                      <li>Cloud, Broadband, and Colocation expirence</li>
                      <li>Enterprise relationship management</li>
                    </ul>
                  <h2>CERTIFICATION / TECHNICAL PROFICIENCIES</h2>
                  <ul>
                      <li>Amazon Web Services (AWS) Certified Web Practitioner</li>
                      <li>Certified Scrum Master</li>
                    </ul>
                  <h2>PROFESSIONAL EXPERIENCE</h2>
                  <h2>EDUCATION</h2></p>
                    <span class="float-left">MicroTrain Technologies, Chicago, IL </span> 
                    <span class="float-right">2019 </span>
                    <h3 class="clearfix"></h3>
                    <strong>Agile Full Stack Web and Hybrid Mobile Application Development</strong>
                    <p></p>
                      <span class="float-left">University of Chicago, Chicago, IL</span>
                      <span class="float-right">1994 </span>
                      <h3 class="clearfix"></h3>
                      <p><strong>MBA Marketing and Finance</strong></p>
                      <span class="float-left">Illinois Institute of Technology, Chicago, IL</span>
                      <span class="float-right">1989 </span>
                      <h3 class="clearfix"></h3>
                      <strong>BBA Management Information Systems</strong>
                      <p></p>
                   
          </main> 
                  <script>

                    var toggleMenu = document.getElementById('toggleMenu');
                    var nav = document.querySelector('nav');
                    toggleMenu.addEventListener(
                      'click',
                      function(){
                        if(nav.style.display=='block'){
                          nav.style.display='none';
                        }else{
                          nav.style.display='block';
                        }
                      }
                    );
                  </script>     
                      
    </body>
    </html>
                  
EOT;

require '../core/layout.php';