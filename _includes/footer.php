<script>
    $('.zmdi-menu, figure.overlay').click(function(){
        $('nav').toggleClass('show');
        $('figure.overlay').fadeToggle(500);
    })
    $('.category').click(function(){
        $(this).toggleClass('active');
        $('ul', this).slideToggle(); 
    });
    $('#reveal_button').click(function(){
        $(this).fadeOut(500);
        $('.form_hidden').delay(500).slideDown(500);
    });
</script>

<footer>
    <div class="container cf">
        <div class="four">
            <ul>
                <li>Menu</li>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="styles.php">Styles</a></li>
                <li><a href="classes_adults.php">Classes</a></li>
                <li><a href="schedule.php">Schedule</a></li>
                <li><a href="pricing.php">Pricing</a></li>
                <li><a href="faq.php">FAQ</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
        <div class="four">
            <ul>
                <li>Social</li>
                <li><a href="https://www.facebook.com/SoutheastJKD/" target="_blank">Facebook</a></li>
                <li><a href="https://twitter.com/southeastjkd" target="_blank">Twitter</a></li>
                <li><a href="https://www.instagram.com/southeastjeetkunedo/" target="_blank">Instagram</a></li>
            </ul>
        </div>
        <div class="four">
            <ul>
                <li>Contact Info</li>
                <li>706.364.8127</li>
                <li>4158 Washington Rd<br>
        Evans, GA 30809</li>
            </ul>
        </div>
        <div class="four">
        <h2>Have Questions?</h2>
            <p>Send us an email. We will contact you shortly!</p>
            <iframe src="https://services.cognitoforms.com/f/srgSluNVl0in9YqojRAz5g?id=1" style="position:relative;width:100%;" frameborder="0" scrolling="yes" seamless="seamless" height="504" width="100%"></iframe>
<script src="https://services.cognitoforms.com/scripts/embed.js"></script>
           <script>
      Cognito.setCss('.cognito button{float:right;width:16%;font-size:16px;padding:8px 1%;-webkit-appearance:none;border:0 none #fff;background-color:#AE1607;border-radius:5px;color:#fff}.cognito .c-label label,.cognito .c-label,.cognito .c-editor,.cognito.c-sml .c-action{padding:4px 0!important;margin:0}.cognito .c-field{padding:0}.cognito .c-editor textarea{margin-bottom:0}textarea,input{outline:none;width:96%;font-size:16px;padding:8px 2%;border:0 none #fff;border-radius:5px;background-color:rgba(255,255,255,0.75)}.cognito input:focus,.cognito textarea:focus{background-color:rgba(255,255,255,1)}');
</script>
            <!-- <form name="myForm2" id="myForm2" method="post" action="mail.php" onsubmit="return validateForm2()" class="contact-form footer">
                <input type="text" placeholder="Name (required)" name="name">
                <input type="hidden" name="email">
                <input type="email" placeholder="Email Address (required)" name="address">
                <input type="tel" placeholder="Phone Number" name="phone">
                <textarea name="message" id="" cols="30" rows="3" placeholder="Comments (required)"></textarea>
                <input type="submit">
            </form> -->
        </div>
    </div>
</footer>