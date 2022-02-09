<?php include "pages/includes/header.php"?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <form action="action.php" method="POST">
                        <div class="card py-3 px-3">
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Input Word</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="input_value">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Select Type</label>
                                <div class="col-md-8">
                                    <label for=""> <input type="radio" name="type" value="word" >Word Count</label>
                                    <label for=""> <input type="radio" name="type" value="character">Character Count</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label">Result</label>
                                <div class="col-md-8">
                                    <input type="text" readonly value="<?php echo isset($result) ? $result: ''; ?>" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label"></label>
                                <div class="col-md-8">
<!--                                    <input type="submit" name="xyz" class="btn-warning form-control" value="Get Result">-->
                                    <textarea class="form-control" readonly  cols="30" rows="10"><?php echo isset($result)?"$givenWord\n$wordCount\n$characterCount": ''?></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
<?php include "pages/includes/footer.php.php"?>
