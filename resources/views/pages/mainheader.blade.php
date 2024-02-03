<header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title">Anish Ali Khan</h6>
                <p>Web Developer</p>

                <div class="buttons pt-3">
                   <a href="https://www.naukri.com/mnjuser/homepage" class="btn btn-primary rounded">HIRE ME</a>
                   <a href="{{ route('download.cv') }}" class="btn btn-dark rounded">Download CV</a>
                </div>      

                <div class="socials mt-4">
                    <a class="social-item" href="https://www.instagram.com/anis__ali7/"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="https://github.com/Anish8955"><i class="ti-github"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="{{asset('assets/imgs/man.svg')}}" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>01</h2>
                <p>Happy Clients</p>
            </div>
            <div class="widget-item">
                <h2>04</h2>
                <p>Project Completed</p>
            </div>
            <div class="widget-item">
                <h2>03</h2>
                <p>Awards Won</p>
            </div>
        </div>
    </header>