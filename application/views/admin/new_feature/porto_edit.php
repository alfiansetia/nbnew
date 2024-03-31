<div class="form-group">
    <label for="" class="col-sm-2 control-label">Select Product Type *</label>
    <div class="col-sm-4">
        <select name="product_type_id" class="form-control select2">
            <?php
            foreach ($product_types as $row) {
            ?>
                <option value="<?= $row['id']; ?>" <?= $portfolio['product_type_id'] == $row['id'] ? 'selected' : '' ?>><?= $row['type']; ?></option>
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
                <option value="<?= $row['id']; ?>" <?= $portfolio['age_id'] == $row['id'] ? 'selected' : '' ?>><?= $row['name']; ?></option>
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
                <option value="<?= $row['id']; ?>" <?= $portfolio['texture_id'] == $row['id'] ? 'selected' : '' ?>><?= $row['texture_name']; ?></option>
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
                <option value="<?= $row['id']; ?>" <?= $portfolio['specific_need_id'] == $row['id'] ? 'selected' : '' ?>><?= $row['name']; ?></option>
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
            <?= $portfolio['type']; ?>
            </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Life Stage *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="life_stage">
            <?= $portfolio['life_stage']; ?>
            </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Size *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="size">
        <?= $portfolio['size']; ?>
        </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Fungsi Utama *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="fungsi_utama">
            <?= $portfolio['fungsi_utama']; ?>
        </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Komposisi *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="komposisi">
            <?= $portfolio['komposisi']; ?>
        </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Analisa Gizi *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="analisa_gizi">
            <?= $portfolio['analisa_gizi']; ?>    
        </textarea>
    </div>
</div>
<div class="form-group">
    <label for="" class="col-sm-2 control-label">Kalori *</label>
    <div class="col-sm-8">
        <textarea class="form-control editor" name="kalori">
            <?= $portfolio['kalori']; ?>
        </textarea>
    </div>
</div>