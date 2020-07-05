
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/8bbfa7e7b1.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <title></title>
</head>
<body>

    <nav class='main-nav'>
        <ul>
            <li><a href="#">Department</a></li>
            <li><a href="#">Academics</a></li>
            <li><a href="#">Research & Innovation</a></li>
            <li><a href="#">Consultation Hours</a></li>
        </ul>
    </nav>

    <div class="wrap">
    
        <div id="arrow-left" class="arrow"></div>
        <div id="slider">
            <div class="slide slide1">
                <div class="slide-content">
                    <span>Enterprise Resource Planning</span>
                </div>
            </div>

            <div class="slide slide2">
                <div class="slide-content">
                    <span>Network Security</span>
                </div>
            </div>

            <div class="slide slide3">
                <div class="slide-content">
                    <span>Web Development & Technologies</span>
                </div>
            </div>

            <div class="slide slide4">
                <div class="slide-content">
                    <span>Data Analytics</span>
                </div>
            </div>

            <div class="slide slide5">
                <div class="slide-content">
                    <span>Computer Science</span>
                </div>
            </div>
        </div>
        <div id="arrow-right" class="arrow"></div>

    </div>

    <div id="course-section">
    <div class="inner-width">
            <h4 class="section-title">Courses</h4>
                <div class="border"></div>
                <div class="services-container">
                    <div class="service-box">
                        <div class="service-icon-erp">
                        <img src="../Images/erp-icon.png" alt="">
                        </div>
                    <div class="services-title">Enterprise Resource Planning</div>
                    <div class="service-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                        <div class="card-1">          
                        <h3><a class ="nav-link" href="/formErp">Upload Pictures</a></h3>
                        </div>
                        <div class="card-1">          
                        <h3><a class ="nav-link" href="/displayErp">Display Images</a></h3>
                        </div>


                    </div>
                </div>

                <div class="service-box">
                    <div class="service-icon-network">
                    <img src="../Images/network-secuirty.png" alt="">
                </div>
                <div class="services-title">Network Security</div>
                <div class="service-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    <div class="card-1">          
                    <h3><a class ="nav-link" href="/formNetwork">Upload Pictures</a></h3>
                    </div>
                    <div class="card-1">          
                    <h3><a class ="nav-link" href="/displayNetwork">Display Images</a></h3>
                    </div>


                </div>
                </div>

            <div class="service-box">
                <div class="service-icon-web">
                <img src="../Images/web-dev.png" alt="">
                </div>
            <div class="services-title">Web Development & Technologies</div>
            <div class="service-desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/formWeb">Upload Pictures</a></h3>
                </div>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/displayWeb">Display Images</a></h3>
                </div>


                </div>
            </div>

            
            <div class="service-box">
                <div class="service-icon-da">
                <img src="../Images/data-analytics.png" alt="">
                </div>
            <div class="services-title">Data Analytics</div>
            <div class="service-desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/formAnalytics">Upload Pictures</a></h3>
                </div>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/displayAnalytics">Display Images</a></h3>
                </div>


                </div>
            </div>

            
            <div class="service-box">
                <div class="service-icon-ca">
                <img src="../Images/computer-sci.png" alt="">
                </div>
            <div class="services-title">Computer Science</div>
            <div class="service-desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/formScience" >Upload Pictures</a></h3>
                </div>
                <div class="card-1">          
                <h3><a class ="nav-link" href="/displayScience">Display Images</a></h3>
                </div>


                </div>
            </div>

                    </div>
                </div>
            </div>


            </div>
    </div>

    <section id="separator-1"></section>

    <section id="services-section">
        <div class="inner-width">
            <h4 class="section-title">What we do</h4>
                <div class="border"></div>
                <div class="services-container">
                    <div class="service-box">
                        <div class="service-icon">
                        <img src="../Images/vision.png" alt="" srcset="">
                        </div>
                    <div class="services-title">Vision</div>
                    <div class="service-desc">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-icon">
                    <img src="../Images/bullseye.png" alt="" srcset="">
                </div>
                <div class="services-title">Mission</div>
                <div class="service-desc">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                </div>
                </div>

                    </div>
                </div>
            </div>


            </div>
        </div>

        
    </section>

    <div class="footer">
		&copy; 2019 <a href ="#"></a> | All rights reserved.
	</div>
    
    <script type="text/javascript">
        $(window).on('scroll', function(){
            if ($(window).scrollTop()){
                $('nav').addClass('black');               
            }
            else
            {
                $('nav').removeClass('black');
            }               
        });

        let silderImages = document.querySelectorAll('.slide'),
            arrowRight = document.querySelector('#arrow-right'),
            arrowLeft = document.querySelector('#arrow-left'),
            current = 0;

        //Clear all images
        function reset(){
            for(let i = 0; i <silderImages.length; i++){
                silderImages[i].style.display = 'none';
            }
        }

        // Init slider
        function startSlide(){
            reset();
            silderImages[0].style.display = 'block';
        }

        //show prev
        function slideLeft(){
            reset();
            silderImages[current - 1].style.display = 'block';
            current--;
        }

        //show next
        function slideRight(){
            reset();
            silderImages[current + 1].style.display = 'block';
            current++;
        }

        //left arrow click
        arrowLeft.addEventListener('click', function(){
            if(current === 0){
                current = silderImages.length;
            }
            slideLeft();
        });

        //right arrow click
        arrowRight.addEventListener('click', function(){
            if(current === silderImages.length - 1){
                current = -1
            }
            slideRight();
        });



        startSlide();             
    </script>
        
</body>
</html>