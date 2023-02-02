@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row replace-loader">
        <div class="col-12 ">
            <div class="row mini-body mx-1 mx-md-5 my-5">                
                <div class="col-1 px-0 d-flex justify-content-end align-items-center">
                   <div class="row menu">
                        <div class="col-12 px-0">
                            <ul class="nav flex-column">
                                <li class="nav-item menu-item my-1" id="about-me">
                                  <a class="nav-link link menu-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                                    </svg><br>
                                    ABOUT
                                  </a>
                                </li>
                                <li class="nav-item menu-item my-1" id="my-resume">
                                  <a class="nav-link link menu-link">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                                    </svg><br>
                                    RESUME
                                  </a>
                                </li>
                                <li class="nav-item menu-item my-1 contact-me">
                                  <a class="nav-link link menu-link" >
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                        <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                    </svg><br>
                                    CONTACT
                                  </a>
                                </li>
                              </ul>
                        </div>
                   </div>
                </div>
                <div class="col-11 col-md-4">
                    <div class="row content">
                        <div class="col-12 px-0">
                            <div id="carouselExampleSlidesOnly" class="carousel slide carousel-fade rounded" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider1.jpg') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider4.jpg') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider5.jpg') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider6.jpg') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider7.jpg') }}" alt="Third slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="img-fluid rounded" src="{{ asset('assets/media/slider8.jpg') }}" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-12 personal-detail-div">
                            <div class="row">
                                <div class="col-12 profile-picture-div">
                                    <a class="text-decoration-none" href="{{route('index')}}">
                                        <img class="img-fluid w-25 profile-picture" src="{{ asset('assets/media/profile-picture.PNG') }}" alt="profile picture">
                                    </a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 text-center pt-4 pb-2">
                                    <h4 class="bold-title">Olaniyi Olamide</h4>
                                    <small class="title">Full-stack Developer</small>
                                    <p class="mt-2">
                                        <a href="https://github.com/olaniyilamie" class="px-2 link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                                            <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                                        </svg></a>
                                        <a href="https://www.linkedin.com/in/olaniyilamie/" class="px-2 link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                                            <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                                        </svg></a>
                                        <a href="https://twitter.com/_olamie" class="px-2 link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                        </svg></a>
                                        <a href="https://www.instagram.com/_olamie/" class="px-2 link"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                                        </svg></a>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 cv-contact-div">
                                    <div class="row">
                                        <div class="col-6 cv-button-div py-3">
                                            <a href="{{asset('assets/file/olaniyi_olamide_cv.pdf')}}" target="_blank" class="link">DOWNLOAD CV
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-down-fill" viewBox="0 0 16 16">
                                                    <path d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm2.354 6.854-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 9.293V5.5a.5.5 0 0 1 1 0v3.793l1.146-1.147a.5.5 0 0 1 .708.708z"/>
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="col-6 contact-button-div py-3">
                                            <p class="contact-me">CONTACT ME
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/>
                                                </svg>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                   </div>
                </div>
                <div class="col-12 col-md-5 my-3 dynamic-content"></div>
                <div class="col-12 col-md-5 my-3 pick-content-to-show-from-here d-none">
                    <div class="row all-content">
                        <div class="col-12" id="about-me-content">
                            <div class="row">
                                <div class="col-12 p-3 all-content-title">
                                    <h5 class="bold-title px-4"><span class="highlight">About</span> Me</h5>                                
                                </div>
                                <div class="col-12 py-4">  
                                    <div class="row px-4">
                                        <div class="col-12 col-md-6 text-justify" style="border-right: 1px solid rgb(214 214 214 / 5%">
                                            <small class="descriptions">
                                                I am Olaniyi Olamide, a Back-end & Frond-end developer based in Lagos, Nigeria with solid experience in building application with modern technologies.       
                                            </small>
                                        </div>
                                        <div class="col-12 col-md-6 mt-3 mt-md-0 text-justify">
                                            <small class="d-block py-2 descriptions" style="border-bottom: 1px solid rgb(214 214 214 / 5%">
                                                EXPERIENCE ....  <i class="float-end">2 Years</i>
                                            </small>
                                            <small class="d-block py-2 descriptions" style="border-bottom: 1px solid rgb(214 214 214 / 5%">
                                                FREELANCE ....  <i class="float-end">Available</i>
                                            </small>
                                            <small class="d-block py-2 descriptions" style="border-bottom: 1px solid rgb(214 214 214 / 5%">
                                                Location ....  <i class="float-end">Nigeria</i>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-3 all-content-title h-50">
                                    <h5 class="bold-title px-4"><span class="highlight">My</span> Services</h5>                                
                                </div>
                                <div class="col-12 py-4">  
                                    <div class="row px-4">
                                        <div class="col-12 col-md-6 text-center" style="border-right: 1px solid rgb(214 214 214 / 5%">
                                           <div class="row">
                                                <div class="col-12 p-3">
                                                    <i class="fa-brands fa-html5 display-1 highlight pb-1"></i>
                                                    <p class="bold-title">Front-end</p>  
                                                    <p class="text-justify descriptions">Designs with the user in mind to ensure that visitors can easily interact and navigate sites using programming languages.</p>
                                                </div>
                                                <div class="col-12 p-3">
                                                    <i class="fa-brands fa-wordpress display-1 highlight pb-1"></i>
                                                    <p class="bold-title">WordPress</p>  
                                                    <p class="text-justify descriptions">Open-source Content Management System (CMS) for website development.</p>
                                                </div>
                                           </div>
                                        </div>
                                        <div class="col-12 col-md-6 text-center">
                                            <div class="row">
                                                <div class="col-12 p-3">
                                                    <i class="fa-brands fa-php display-1 highlight pb-2"></i>
                                                    <p class="bold-title">Back-end</p>  
                                                    <p class="text-justify descriptions"> Site interactiveness along with the database management utilizing appropriate Framework</p>                                            
                                                </div>
                                                <div class="col-12 p-3 pt-4">
                                                    <i class="fa-solid fa-gear display-1 highlight pb-2"></i>
                                                    <p class="bold-title">Website Maintance</p>  
                                                    <p class="text-justify descriptions">Keep your website updated helps clients site remain relevant and on top of their game .</p>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="resume-content">
                            <div class="row">
                                <div class="col-12 p-3 all-content-title h-50">
                                    <h5 class="bold-title px-4"><span class="highlight">R</span>esume</h5>                                
                                </div>
                                <div class="col-12 py-4">  
                                    <div class="row px-4">
                                        <div class="col-12 col-md-6" style="border-right: 1px solid rgb(214 214 214 / 5%">
                                           <div class="row">
                                                <div class="col-12 px-3">                                                    
                                                    <i class="fa-solid fa-briefcase icon-style"></i>
                                                    <p class="icon-title">EXPERIENCE</p>  
                                                    <p class="all-content-title"></p>
                                                </div>
                                                <div class="col-12 p-3 all-content-title">                                                    
                                                    <small class="current-date p-1">2022 - Present</small>  <br>
                                                    <p class="job-title pt-2 mb-0">Jnr. Back-end Developer
                                                    <img class="img-fluid company-logo" src="{{ asset('assets/company_logo/canadian_wealth_inc.jpg') }}">    
                                                    </p> 
                                                    <small class="company">Canadian Wealth Inc.</small> 
                                                    <p class="descriptions pt-2">Collaborated with development teams, users, product managers to develop websites.</p>
                                                </div>
                                                <div class="col-12 p-3 all-content-title">                                                    
                                                    <small class="current-date p-1">2022 - Present</small>  <br>
                                                    <p class="job-title pt-2 mb-0">Web Developer/Technical Support 
                                                    <img class="img-fluid company-logo" src="{{ asset('assets/company_logo/qserver.jpg') }}">    
                                                    </p> 
                                                    <small class="company">QServers Network Ltd.</small> 
                                                    <p class="descriptions pt-2">Develop site and server support to clients with hosted website
                                                </div>
                                                <div class="col-12 p-3 all-content-title">                                                    
                                                    <small class="date p-1">2021 - 2022</small>  <br>
                                                    <p class="job-title pt-2 mb-0">Web Developer
                                                    <img class="img-fluid company-logo" src="{{ asset('assets/company_logo/sample.jpg') }}">    
                                                    </p> 
                                                    <small class="company">Quadracle Solutions Ltd.</small> 
                                                    <p class="descriptions pt-2">Website development and maintain existing website
                                                </div>
                                           </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="row">
                                                <div class="col-12 px-3">
                                                    <i class="fa-solid fa-graduation-cap icon-style"></i>
                                                    <small class="icon-title">EDUCATION</small> 
                                                    <p class="all-content-title"></p>
                                                </div>
                                                <div class="col-12 p-3 all-content-title pb-5">                                                    
                                                    <small class="date p-1">2020 - 2021</small>  <br>
                                                    <p class="job-title pt-2 mb-0">Programming Course
                                                    <img class="img-fluid company-logo" src="{{ asset('assets/company_logo/moat_academy.jpg') }}">    
                                                    </p> 
                                                    <small class="company">Moat Academy for Developers</small> 
                                                    <p class="descriptions pt-2">Full-stack developer using PHP, JavaScript, JQuery, MySql ...</p>
                                                </div>
                                                <div class="col-12 p-3 all-content-title">                                                    
                                                    <small class="date p-1">2013 - 2018</small>  <br>
                                                    <p class="job-title pt-2 mb-0">University of Ilorin
                                                    <img class="img-fluid company-logo" src="{{ asset('assets/company_logo/unilorin.jpg') }}">    
                                                    </p> 
                                                    <small class="company">Nigeria</small> 
                                                    <p class="descriptions pt-2">Bsc. Estate Management</p>
                                                </div>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 p-3 all-content-title h-50">
                                    <h5 class="bold-title px-4"><span class="highlight">S</span>kills</h5>                                
                                </div>
                                <div class="col-12 py-4">  
                                    <div class="row px-4">
                                        <div class="col12 col-md-6" style="border-right: 1px solid rgb(214 214 214 / 5%">
                                           <div class="row">
                                                <div class="col-12 px-3">                                                    
                                                    <i class="fa-solid fa-code icon-style"></i>
                                                    <p class="icon-title">CODING</p>  
                                                    <p class="all-content-title"></p>
                                                </div>
                                                <div class="col-12 p-3 all-content-title">                                                    
                                                    <div class="row text-center">
                                                        <div class="col-6">                                                            
                                                            <i class="fa-brands fa-html5 display-3 highlight"></i>
                                                            <p class="skills-icon-title">HTML</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <i class="fa-brands fa-css3-alt display-3 highlight"></i>
                                                            <p class="skills-icon-title">CSS</p>
                                                        </div>
                                                    </div>                                                        
                                                    <div class="row text-center">
                                                        <div class="col-6">                                                            
                                                            <i class="fa-brands fa-square-js display-3 highlight"></i>
                                                            <p class="skills-icon-title">JavaScript</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <i class="fa-brands fa-vuejs display-3 highlight"></i>
                                                            <p class="skills-icon-title">VueJs</p>
                                                        </div>
                                                    </div>    
                                                    <div class="row text-center">
                                                        <div class="col-6">                                                            
                                                            <i class="fa-brands fa-php display-3 highlight"></i>
                                                            <p class="skills-icon-title">PHP</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <i class="fa-brands fa-laravel display-3 highlight"></i>
                                                            <p class="skills-icon-title">Laravel</p>
                                                        </div>
                                                    </div>    
                                                    <div class="row text-center">
                                                        <div class="col-6">                                                            
                                                            <i class="fa-brands fa-wordpress-simple display-3 highlight"></i>
                                                            <p class="skills-icon-title">WordPress</p>
                                                        </div>
                                                        <div class="col-6">
                                                            <i class="fa-brands fa-github display-3 highlight"></i>
                                                            <p class="skills-icon-title">Git-Hub</p>
                                                        </div>
                                                    </div>    
                                                </div>
                                           </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-12 px-3">
                                                    <i class="fa-solid fa-list icon-style"></i>
                                                    <small class="icon-title">KNOWLEDGE</small> 
                                                    <p class="all-content-title"></p>
                                                </div>
                                           </div>
                                           <div class="row">
                                                <div class="col-12">
                                                    <ul class="fa-ul">
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Proficiency in MYSQL</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>HTML, CSS, jQuery</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>SEO Optimize</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>WordPress Development</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Website hosting</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Teamwork</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Problem-solving</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Practical thinking</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Responsive and mobile-ready</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Website Maintenance</li>
                                                        <li class="pb-2"><span class="fa-li"><i class="fa-solid fa-spinner fa-pulse highlight"></i></span>Agile methodology</li>
                                                    </ul>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12" id="contact-me-content">
                            <div class="row">
                                <div class="col-12 p-3 all-content-title h-50">
                                    <i class="fa-solid fa-location-dot highlight"></i>
                                    <h5 class="bold-title px-4 d-inline"><span class="highlight">Get</span> in Touch</h5>                                
                                </div>
                                <div class="col-12 py-4">  
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15854.317314285328!2d3.3817918690458617!3d6.574654573920234!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9290b8515965%3A0x215df3ec2cea3657!2sOgudu%20105102%2C%20Lagos!5e0!3m2!1sen!2sng!4v1674293816673!5m2!1sen!2sng" width="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                                <div class="col-12 p-3 mb-4 all-content-title">
                                    <i class="fa-solid fa-message highlight"></i>
                                    <h5 class="bold-title px-4 d-inline mb-2"><span class="highlight">Contact</span> Form</h5>                                
                                </div>
                                <div class="col-12 p-3">
                                    <form action="{{route('send.message')}}" method="POST">
                                        @csrf
                                        @if (session('status') || session('status'))
                                            @if (session('status'))
                                                <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>
                                            @else
                                                <div class="alert alert-error">
                                                    {{ session('error') }}
                                                </div>
                                            @endif
                                        @endif
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <input type="text" class="form-control form-control-sm input-style @error('name') is-invalid @enderror" placeholder="FullName" name="name" value="{{ old('name') }}">
                                                @error('name')<span class="alert alert-danger py-0 my-0">{{ $message }}</span>@enderror
                                                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <input type="email" class="form-control form-control-sm input-style @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}">
                                                @error('email')<div class="alert alert-danger py-0 my-0">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control form-control-sm input-style @error('message') is-invalid @enderror" rows="4" placeholder="Your Message" name="message"></textarea>
                                                @error('message')<div class="alert alert-danger py-0 my-0">{{ $message }}</div>@enderror
                                            </div>
                                            <div class="col-12 col-md-6 mt-3 mb-4">
                                                <button class="btn submit"><i class="fa-solid fa-share px-2"></i>Send Message </button>
                                            </div>
                                        </div>
                                    </form>                             
                                </div>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
    <script>        
        $(document).ready(function(){              
            let $window = $(window);
            let windowSize = $window.width();
            let contentDiv = $(".content").height() - 35;

            if(windowSize > 768){
                $(".all-content, .dynamic-content").height(contentDiv);
            }

            let showAllContent = $('.pick-content-to-show-from-here').html();
            let aboutMeContent = $('#about-me-content').html();
            let resumeContent = $('#resume-content').html();
            let contactMeContent = $('#contact-me-content').html();

            $('.dynamic-content').html(showAllContent);            

            $("#about-me").click(function(){ 
                $('#my-resume').removeClass('active');
                $('.contact-me').removeClass('active'); 
                $('#about-me a').addClass('active');                                     
                $('.dynamic-content').hide().html(aboutMeContent).fadeIn(700);
            })

            $("#my-resume").click(function(){  
                $('#about-me a').removeClass('active');
                $('.contact-me a').removeClass('active'); 
                $('#my-resume a').addClass('active');             
                $('.dynamic-content').hide().html(resumeContent).fadeIn(700);
            })
            $(".contact-me").click(function(){   
                $('#my-resume a').removeClass('active');
                $('#about-me a').removeClass('active'); 
                $('.contact-me a').addClass('active');                   
                $('.dynamic-content').hide().html(contactMeContent).fadeIn(700);
            })

            $(".submit").click(function(){
                $(this).html("Sending <div class=\"spinner-border spinner-border-sm mx-2 text-muted\" role=\"status\"></div>");
            })
             
        })
    </script>
@endsection