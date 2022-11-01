
<section id="contact">
    <div class="inner-contact">
        <h2>GET IN TOUCH</h2>
        <h1>Got a question?<br>
I would love to hear from you!</h1>
    </div>

    <div class="contact-form">
        <form action="" id="myform">
            <h5>Send me a message</h5>
            <p>Please fill the form</p>
            <input name="sendEmail" type="email" placeholder="Please enter your email">
            <textarea name="message" id="" cols="30" rows="10" style="resize: none;"></textarea><br>
            <input id="submit" value="Submit" type="text">

            <div>
                <h5 style="margin-bottom: 30px; font-family: 'Patua One', cursive; color: rgba(255, 255, 255, 0.784);">Follow me on</h5>
                <a href="https://web.facebook.com/Makier2011" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UCLkF8IyguIKBWzNzJqGH_RA/videos" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://github.com/punkmakier" target="_blank"><i class="fa-brands fa-github"></i></a>
            </div>
        </form>
    </div>


</section>

<script>
    $("#submit").on('click', function(){

        var data = $("#myform").serialize()+"&submit=submit";
        $("#submit").val("Sending...");
        $("#submit").css("background-color","#8cb860");
        $.ajax({
            type: "POST",
            url: "inc/mailersystem.php",
            data: data,
            success: function(response){
            $("#submit").val("Submit");
            $("#submit").css("background-color","#fff");
                if(response == "Sent"){
                    Swal.fire(
                    'Message has been sent!',
                    'Thank you for sending me a message. Please wait for the response.',
                    'success'
                    )
                }
                else{
                        Swal.fire(
                        'Failed!',
                        'Your message couldn\'\ t be send. Please try again.',
                        'error'
                        )
                    }
            }
        })
    })
</script>