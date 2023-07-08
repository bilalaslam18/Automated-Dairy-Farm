<main>
    <h1>Add New Animal</h1>
    <div class=" msg"> <?php if(isset($_SESSION['msg'])) { echo $_SESSION['msg']; unset($_SESSION['msg']); } ?> </div>
    <form action="#" method="POST">
        <header>Animal Information</header>
        <div class="item">
            <label for="id"><span class="star">*</span>Animal ID : </label>
            <input type="text" name="id" id="id" class="id" placeholder="Enter animal id" required>
        </div>
        <div class="item">
            <label for="breed"><span class="star">*</span>Breed : </label>
            <select name="breed" id="breed" class="breed" required>
                <option value="">Select breed</option>
                <?php 
                    for ($i = 0; $i < sizeof($breeds); $i++)
                    {
                       ?> <option value="<?= $breeds[$i] ?>"><?php echo $breeds[$i] ?></option> <?php
                    }
                ?>
            </select>
        </div>
        <div class="item">
            <label for="gender"><span class="star">*</span>Gender : </label>
            <select name="gender" id="gender" class="gender" required>
                <option value="">Select animal type</option>
                <option id="cow" value="Cow">Cow</option>
                <option id="bull" value="Bull">Bull</option>
            </select>
        </div>
        <div class="item">
            <label for="color">Color : </label>
            <input type="text" id="color" name="color" class="color" placeholder="Enter color">
        </div>
        <div class="item">
            <label for="dob">Date of Birth : </label>
            <input type="date" id="dob" name="dob" class="dob">
        </div>
        <div class="item">
            <label for="price">Price : </label>
            <input type="number" name="price" id="price" placeholder="Enter price">
        </div>
        <div class="onlyCow" id="onlyCow">
            <header>Pregnancy Details</header>
            <div class="item">
                <label for="pregnant">Pregnant : </label>
                <select name="pregnant" id="pregnant" class="pregnant">
                    <option value="">Select pregnancy status</option>
                    <option value="No">No</option>
                    <option value="Yes">Yes</option>
                </select>
            </div>
            <div class="pregYes">
                <div class="item">
                    <label for="startDate">Starting Date : </label>
                    <input type="date" id="startDate" name="startDate" class="startDate">
                </div>
            </div>
            <div class="item">
                <label for="insemination">Insemination type: </label>
                <select name="insemination" id="insemination" class="insemination">
                    <option value="">Select insemination type</option>

                    <option value="Artificial Insemination">Artificial Insemination</option>
                    <option value="Natural Insemination">Natural Insemination</option>
                </select>
            </div>
            <div class="bullid">
                <div class="item">
                    <label for="bullId">Bull ID : </label>
                    <input type="text" name="bullId" id="bullId" class="bullId" placeholder="Enter bull id">
                </div>
            </div>
            <div class="insDate">
                <div class="item">
                    <label for="semDate">Insemination Date : </label>
                    <input type="date" id="semDate" name="semDate" class="semDate">
                </div>
            </div>
        </div>
        <input class="button-primary" type="submit" id="add" name="add" value="Add">
    </form>
</main>