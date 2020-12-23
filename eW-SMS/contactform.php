<!--Start Contact Us 1st Column-->
<div class="col-md-8">
    <form action="" method="post">
        <input type="text" class="form-control" name="name" placeholder="Name"><br>
        <input type="text" class="form-control" name="subject" placeholder="Subject"><br>
        <input type="email" class="form-control" name="email" placeholder="E-mail"><br>
        <textarea class="form-control" name="message" placeholder="How can we help you?" style="height:150px;"></textarea><br>
        <input class="btn btn-primary btn-block" type="submit" value="Send" name="submit"><br><br>
        <?php if(isset($msg)) {echo $msg; } ?>
    </form>
</div> 
<!-- End Contact Us 1st Column -->