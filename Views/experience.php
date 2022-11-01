<section id="experience">
    <div class="inner-exp">
        <h2>WORK EXPERIENCE</h2>
        <h1>The Only Source of Knowledge</br>
is Experience</h1>
    </div>
    <div class="container d-sm-flex justify-content-center ">
        <div class="exp-card ">
            <h3>On-The-Job Training</h3>
            <img src="assets/Others/springvalley.png" width="100" alt="">
            <h4>Spring Valley Tech Corp</h4>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> 500 Hours (Completed)</li>
                <li><i class="fa-solid fa-circle-check"></i> Assigned Task:<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Game Development ( Fullstack )<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Web Development ( Graphic Designer )</li>
            </ul>
            <button id="sampleExpWork">See Sample Works</button>
        </div>

        <div class="exp-card ">
            <h3>Software Engineer</h3>
            <img src="assets/Others/springvalley.png" width="100" alt="">
            <h4>CTC BPO</h4>
            <ul>
                <li><i class="fa-solid fa-circle-check"></i> Hired on Sept. 05, 2022 - Present</li>
                <li><i class="fa-solid fa-circle-check"></i> Role: Full Stack Web Developer</li>
                <li><i class="fa-solid fa-circle-check"></i> PHP Developer</li>
            </ul>
        </div>
    </div>

</section>

<div id="showsamplesEXP" class="showsamples">
    <div style="width: 100%; height: 60px; margin-top: 100px;">
        <i class="fa-solid fa-xmark" style="color: #fff; font-size: 2rem; position: absolute; right: 5%; cursor: pointer;" id="closeSample"></i>
    </div>

    <div data-aos="fade-up" class="gallery">
      <a href="assets/Others/vanlogin.png" data-lightbox="mygallery" data-title="Van Rental Login UI"><img src="assets/Others/vanlogin.png"></a>
      <a href="assets/Others/vanregister.png" data-lightbox="mygallery" data-title="Van Rental Register UI"><img src="assets/Others/vanregister.png"></a>
      <a href="assets/Others/vanui.png" data-lightbox="mygallery" data-title="Van Rental Main Page UI"><img src="assets/Others/vanRental_small.png"></a>
      <a href="assets/Others/intro1.PNG" data-lightbox="mygallery" data-title="Creating Assets for Trese Game"><img src="assets/Others/intro1.PNG"></a>
      <a href="assets/Others/treseintro.PNG" data-lightbox="mygallery" data-title="Importing Assets from Photoshop to Unity Game Engine"><img src="assets/Others/treseintro.PNG"></a>
      <a href="assets/Others/unitygame.PNG" data-lightbox="mygallery" data-title="Trese Game Testing"><img src="assets/Others/unitygame.PNG"></a>
    </div>  
</div>


<script>
    $(document).ready(function(){
        $("#sampleExpWork").on('click', function(){
            $("#showsamplesEXP").fadeIn();
        })
        $("#closeSample").on('click', function(){
            $("#showsamplesEXP").fadeOut();
        })
    })
</script>