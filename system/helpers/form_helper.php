<?php

if (!defined('SITE_URL')) {
    exit('No Direct access to page');
}

/**
 * Display A Bootstrap Input Box
 *
 * @param string $name
 * @param string $title
 * @param string $type
 * @param string $value
 * @param string $class
 * @param string $description
 * @return void
 */
function input_box($name, $title, $description ="", $helper = "", $type="text", $value = "", $class="", $attr="")
{
    ?>
	<div class="form-group">
		<label for="<?php echo $name; ?>">
			<?php echo ucwords($title); ?>
		</label>
		<input type="<?php echo $type; ?>" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo $value; ?>" class="form-control <?php echo $class; ?>"
		 placeholder="<?php echo $description; ?>" <?php echo $attr; ?>>
		<p class="help-block">
			<?php echo $helper; ?>
		</p>
	</div>
	<?php
}

/**
 * create a Bootstrap select box
 *
 * @param string $name
 * @param string $title
 * @param string $description
 * @param array $option
 * @param string $class
 * @return void
 */
function select_box($name, $title, $description="", $helper = "", $option = [], $class="", $selected = "")
{
    ?>
		<label for="<?php echo $name; ?>">
			<?php echo ucwords(strtolower($title)); ?>
		</label>
		<select name="<?php echo $name; ?>" id="<?php echo $name; ?>" class="form-control <?php echo $class; ?>">
			<option value="">---</option>
			<?php

            if (is_array($option)):
                for ($i = 0; $i < count($option); $i++):
                    if ($selected == $option[$i]['id']):
                    ?>
				<option value="<?php echo $option[$i]['id']; ?>" selected>
					<?php else: ?>
					<option value="<?php echo $option[$i]['id']; ?>">
						<?php endif; ?>
						<?php echo $option[$i]['title']; ?>
					</option>
					<?php
                endfor;
    endif; ?>
		</select>
		<p class="help-block">
			<?php echo $helper; ?>
		</p>
		<?php
}

/**
 * create a Bootstrap select box
 *
 * @param string $name
 * @param string $title
 * @param string $description
 * @param array $option
 * @param string $class
 * @return void
 */
function multi_check_box($name, $title, $helper = "", $option = [], $class="", $selected = "")
{
    ?>
			<div class="checkbox">
				<?php
if (is_array($option)):
    for ($i = 0; $i < count($option); $i++):
        if ($selected == $option[$i]['id']):
        ?>
					<label>
						<input type="checkbox" name="<?php echo $name; ?>" class="form-control <?php echo $class; ?>" checked>
						<?php echo $title; ?>
					</label>
					<?php else: ?>
					<label>
						<input type="checkbox" name="<?php echo $name; ?>" class="form-control <?php echo $class; ?>">
						<?php echo $title; ?>
					</label>
					<?php endif; ?>
					<?php
                endfor;
    endif; ?>
			</div>
			<p class="help-block">
				<?php echo $helper; ?>
			</p>
			<?php
}

/**
 * create a Bootstrap textarea box for a field
 *
 * @param string $name
 * @param string $title
 * @param string $description
 * @param string $value
 * @param string $class
 * @return void
 */
function textarea_box($name, $title, $description="", $helper = "", $value="", $class="")
{
    ?>
				<label for="<?php echo $name; ?>">
					<?php echo ucwords($title); ?>
				</label>
				<textarea name="<?php echo $name; ?>" placeholder="<?php echo $description; ?>" id="<?php echo $name; ?>" class="form-control <?php echo $class; ?>"><?php echo $value; ?></textarea>
				<p class="help-block">
					<?php echo $helper; ?>
				</p>
				<?php
}

/**
 * Create a Bootstrap What-You-See-Is-What-You-Get Editor
 *
 * @param string $name
 * @param string $title
 * @param string $description
 * @param string $value
 * @param string $class
 * @return void
 */
function wysiwyg_box($name, $title, $helper="", $value="", $class="")
{
    ?>
					<label for="<?php echo $name; ?>">
						<?php echo ucwords($title); ?>
					</label>
					<textarea name="<?php echo $name; ?>" placeholder="<?php echo $helper; ?>" id="<?php echo $name; ?>" class="form-control <?php echo $class; ?>"><?php echo $value; ?></textarea>
					<p class="help-block">
						<?php echo $helper; ?>
					</p>
					<?php
                echo "<script>$(function(){ CKEDITOR.replace('". $name . "'); });</script>";
}

/**
 * create a Bootstrap input box that is purely hidden to the eyes
 *
 * @param string $name
 * @param string $value
 * @return void
 */
function input_hidden_box($name, $value="")
{
    if (isset($value) && !empty($value)) {
        ?>
						<input type="hidden" name="<?php echo $name; ?>" value="<?php echo $value; ?>">
						<?php
    } else {
        ?>
							<input type="hidden" name="<?php echo $name; ?>">
							<?php
    }
}

/**
 * create a Bootstrap button for the form that is by default submit
 *
 * @param string $content
 * @param string $class
 * @param string $type
 * @return void
 */
function form_button($content, $class=" ", $font_icon = "check", $type="submit")
{
    ?>
								<button type="<?php echo $type; ?>" class="btn btn-flat
<?php echo $class; ?>">
									<i class="fa fa-<?php echo $font_icon; ?>"></i>
									<?php echo ucwords($content); ?>
								</button>
								<?php
}

/**
 * set the post value if the form is submitted and contains errors otherwise set the database value
 *
 * @param string $key
 * @param string $user_id
 * @return mixed
 */
function set_value($key = "", $else)
{
    return isset($_POST[$key]) ? $_POST[$key] : $else[$key];
}

function check_box($name ="", $title = "", $checked = false)
{
    ?>
									<div class="checkbox icheck">
										<label>
											<input type="checkbox" name="<?php echo $name; ?>" checked>
											<?php echo $title; ?>
										</label>
									</div>
									<?php
}
