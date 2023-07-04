<form id="contact_form" name="contact_form" method="post">
    <div class="mb-5">
        <label class="labelClass" for="message"><?php echo _labelMessage ?></label>
        <textarea class="form-control inputClass2" id="message" name="message" rows="5"></textarea>
    </div>
    <div class="mb-5 row">
        <div class="col">
            <label class="labelClass" for="name"><?php echo _labelName ?></label>
            <input type="text" required maxlength="50" class="form-control inputClass" id="name" name="name">
        </div>
        <div class="col">
            <label class="labelClass" for="email_addr"><?php echo _labelEmail ?></label>
            <input type="email" required maxlength="50" class="form-control inputClass" id="email_addr" name="email"
                placeholder="<?php echo _inputEmailText ?>">
        </div>
    </div>
    <div>
    <button type="submit" class="btn btn-primary px-4 btn-lg"><?php echo _btnSubmit ?></button>
    </div>
</form>

<script id="ratufa_loader" src="https://www.ratufa.io/c/ld.js?i=contact_form&f=z5unm225&n=n1.ratufa.io"></script>