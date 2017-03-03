<?php
//this function temporarily stores data before moving them to the folder for 10 seconds
// if moving is not processed, the file is immediately deleted from temp file


//so far no success in moving files, ouch

?>

<div class="add-product">
    <div class="container">
        <div class="row"> <!-- this could be a form on one side and preview on the other side, 
                                saving to database after previewing and well I have no idea
                                 how to make it editable... maybe later -->
            <div class="col-md-6">
                <h3>Add new product</h3>
                <form action="" method="post" enctype="multipart/form-data">
                    <h5>Product name: </h5><input type="text" id="name" name="name"></br>
                    <h5>Description: </h5><textarea name="description"></textarea></br>
                    <h5>Price: </h5><input type="text" name="price"></br>
                    <h5>Size</h5>
                    <select name="size">
                        <optgroup label="Adult sizes">
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </optgroup>
                        <optgroup label="Kids sizes">
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                        </optgroup>
                        <optgroup label="Baby sizes">
                            <option value="0-3m">0-3 m</option>
                            <option value="3-6m">3-6 m</option>
                            <option value="6-12m">6-12 m</option>
                            <option value="12-18m">12-18 m</option>
                            <option value="18-24m">18-24 m</option>
                            <option value="2-3">2-3 years</option>
                        </optgroup>
                    </select></br>
                    <h5>Weight(g): </h5>
                    <input type="text" name="weight">
                    <h5>Select main color</h5>
                     <select name="color">
                        <option value="white">white</option>
                        <option value="yellow">yellow</option>
                        <option value="orange">orange</option>
                        <option value="red">red</option>
                        <option value="pink">pink</option>
                        <option value="purple">purple</option>
                        <option value="blue">blue</option>
                        <option value="lightblue">lightblue</option>
                        <option value="teal">teal</option>
                        <option value="green">green</option>
                        <option value="brown">brown</option>
                        <option value="black">black</option>
                        <option value="grey">grey</option>
                        <option value="multicolored">multicolored</option>
                    </select></br>
                    <h5>Image name with extension: </h5>
                    <input type="text" name="image_name"></br>
                    <h5>Upload image: </h5>
                    <input type="file" name="product_image">
                    </br>
                    <!-- this kinda needs a form for uploading files for production
                    for now it can only have an input for the address /images/mens..-->
                    <input type="submit" class="btn btn-success" value="Preview the item">
            
                </form>
            
            </div>
            <div class="col-md-6">

                <!--here someone can add the display of the added product for preview and editation
                this will of course require another model for retrieving data and updating data
                just for display it could for example open modulus or it could load data from the form
                before actual saving to database and require submit after displaying -->
            </div>
        </div>
    </div>
</div>    