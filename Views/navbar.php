

<nav class="navbar navbar-expand-lg fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="assets/Others/mylogo.png" width="150" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars-staggered" style='color: #f0f0f0;'></i>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav mx-auto">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#aboutme">About me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#skills">Skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#project">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#certificates">E-Certificates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#experience">Work Experience</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="#contact">Contact</a>
        </li>
      </ul>

      <a class="float-end-sm m-0 download" href="assets/Mark_Allan_Carba_CV.pdf" download=""><i class="fa-solid fa-download"></i>&nbsp;Download CV</a>

    </div>
  </div>
</nav>



<script>
  var lastScrollTop = 0;
  window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if(scrollTop > lastScrollTop){
      $(".navbar").css("margin-top", "-80px");
      $(".navbar").css("transition", "0.3s ease-in-out");
    }else{
      $(".navbar").css("margin-top", "0");


    }
    lastScrollTop = scrollTop;
  })
</script>