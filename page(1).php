
<div class="container">
        <div class="row">
        <?php
            $sql = "SELECT * FROM car WHERE txtcarType=$carType";
            $result = $con->query($sql);
                while($prd=$result->fetch_object()){
                    //$prd->id; //$prd["id"];
        ?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                    <a href="page.php?pid=<?php echo $prd->id; ?>">
                        <img src="img/<?php echo $prd->picture; ?>" alt="">
                    </a>
                        <div class="caption">
                            <h3><?php echo $prd->brand; $prd->model; ?></h3>
                                <p>ปี:<?php echo $prd->year; ?></p>
                                <p>สี:<?php echo $prd->color; ?></p>
                                <p><?php echo $prd->license; $prd->province; ?></p>
                                <p>
                                    <strong>ราคา: <?php echo $prd->price ?></strong>
                                </p>
                                <p>
                                    <a href="#" class="btn btn-success">Add to basket</a>
                                </p>
                        </div>
                    </div>
                </div>
            <?php
                
            }
            ?>
                
        </div>
    </div>