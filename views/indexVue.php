<?php
  include("template/header.php");
 ?>

<!-- start of the div class formu for add account-->
<div class="formu col-12 col-md-8 col-lg-6">
 <form action="index.php" method="post">
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput" name="name"  placeholder="name">
    </div>
    <div class="form-group">
      <input type="text" class="form-control" id="formGroupExampleInput1" name="cash" placeholder="cash">
    </div>
    <button type="submit" value="Submit" name="addAccount" class="btn btn-primary submi">Submit</button>
  </form>
</div>
<!-- end of the div class formu for add account-->


 <!-- start of the div class block -->
<div class="block">

  <?php foreach ($donnees as $key => $value){
    ?>

    <div class="container accounts col-12 col-md-6 col-lg-4">
      <div class="row">
               <div class="card col-12 col-md-12 col-lg-12">
                 <div class="card-block col-12 col-md-12 col-lg-12">
                 <h3 class="card-title"><?php echo $value->getName(); ?></h3>
                 <p class="card-text"><?php echo $value->getCash(); ?>$</p>
                 <a href="index.php?supprim=<?php echo $value->getId();?>"><i class="material-icons">delete</i></a>

              <a href="update.php?id=<?php echo $value->getId();?>">update</a>


                 </div>
               </div>
       </div>
   </div>

           <?php
             }
           ?>

 </div>
   <!-- end of the div class block -->


 <?php
   include("template/footer.php");
  ?>
