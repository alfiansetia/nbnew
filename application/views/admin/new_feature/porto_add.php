<div class="form-group">
    <label for="" class="col-sm-2 control-label">Select Product Type *</label>
    <div class="col-sm-4">
        <select name="product_type_id" class="form-control select2">
            <?php
            foreach ($product_types as $row) {
            ?>
                <option value="<?= $row['id']; ?>"><?= $row['type']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-2 control-label">Select Age *</label>
    <div class="col-sm-4">
        <select name="age_id" class="form-control select2">
            <?php
            foreach ($ages as $row) {
            ?>
                <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-2 control-label">Select Texture *</label>
    <div class="col-sm-4">
        <select name="texture_id" class="form-control select2">
            <?php
            foreach ($textures as $row) {
            ?>
                <option value="<?= $row['id']; ?>"><?= $row['texture_name']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-2 control-label">Select Specific Needs *</label>
    <div class="col-sm-4">
        <select name="specific_need_id" class="form-control select2">
            <?php
            foreach ($specific_needs as $row) {
            ?>
                <option value="<?= $row['id']; ?>"><?= $row['name']; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="form-group">
    <label for="" class="col-sm-2 control-label">Type *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="type">
            <?php if (isset($_POST['type'])) {
                echo $_POST['type'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Life Stage *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="life_stage">
            <?php if (isset($_POST['life_stage'])) {
                echo $_POST['life_stage'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Size *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="size">
            <?php if (isset($_POST['size'])) {
                echo $_POST['size'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Fungsi Utama *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="fungsi_utama">
            <?php if (isset($_POST['fungsi_utama'])) {
                echo $_POST['fungsi_utama'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Komposisi *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="komposisi">
            <?php if (isset($_POST['komposisi'])) {
                echo $_POST['komposisi'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Analisa Gizi *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="analisa_gizi">
            <?php if (isset($_POST['analisa_gizi'])) {
                echo $_POST['analisa_gizi'];
            } ?></textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Kalori *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="kalori">
            <?php if (isset($_POST['kalori'])) {
                echo $_POST['kalori'];
            } ?></textarea>
    </div>
</div>