<div class="article">
                        <?php 
                            include "functions/database.php";

                            $result = mysqli_query($induction, "SELECT *  FROM `news`");

                            $news = mysqli_fetch_assoc($result);

                            print_r($news);
                        ?>