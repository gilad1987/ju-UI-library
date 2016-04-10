<! --
/**
 * Created by PhpStorm.
 * User: Gilad Takoni
 * Date: 07/04/2016
 * Time: 12:57
 */
-->

<section class="forms ju-width ju-row u-hidden">
    <div class="ju-col-lg-24of24">
        <h1>Forms</h1>

    </div>
    <div class="ju-col-lg-8of24">
        <h2>Text fields</h2>

        Normal:
        <div class="ju-InputWrapper">
            <input type="text" class="ju-Input ju-Input--text is-animation" placeholder="Placeholder">
        </div>

        Disabled:
        <div class="ju-InputWrapper">
            <input type="text" class="ju-Input ju-Input--text is-animation is-disabled" disabled="disabled" placeholder="Placeholder">
        </div>

        Icon:
        <div class="ju-InputWrapper">
            <input type="text" class="ju-Input ju-Input--text is-animation" placeholder="Placeholder">
            <i class="fa fa-usd"></i>
        </div>

        Error:
        <div class="ju-InputWrapper error">
            <input type="text" class="ju-Input ju-Input--text is-animation" placeholder="Placeholder">
            <div class="error-message">
                Error message <i class="fa fa-exclamation-triangle"></i>
            </div>
        </div>



    </div>

    <div class="ju-col-lg-8of24">
        <h2>Form Elements</h2>

        <!-- radio button-->
        <div class="ju-row">
            <div class="ju-col-lg-6of24 u-">
                Radio:
            </div>

            <div class="ju-col-lg-18of24 u-">
                <form >
                    <div class="ju-InputWrapper">
                        <input type="radio" name="input-radio-group" id="input-radio1" value="" checked="checked" class="ju-Input ju-Input--radio">
                        <label for="input-radio1" class="">
                            <a>Please choose item <br> sdf sdf sdf sdf</a>
                        </label>
                    </div>

                    <div class="ju-InputWrapper">
                        <input type="radio" name="input-radio-group" id="input-radio2" value=""  class="ju-Input ju-Input--radio">
                        <label for="input-radio2" class="">
                            <a>Please choose item <br> sdf sdf sdf sdf</a>
                        </label>
                    </div>
                </form>
            </div>
        </div>

        <!-- checkbox button-->
        <div class="ju-row">
            <div class="ju-col-lg-6of24 ">
                Checkbox:
            </div>

            <div class="ju-col-lg-18of24 u-">
                <form >
                    <div class="ju-InputWrapper error">
                        <input type="checkbox" name="input-radio-group" id="input-checkbox" value="" checked="checked" class="ju-Input ju-Input--checkbox">
                        <label for="input-checkbox" class="">
                            <span class="icon-bg"></span>
                            <a>Please choose item</a>
                        </label>

                        <div class="error-message">
                            checkbox error message
                        </div>
                    </div>

                    <div class="ju-InputWrapper">
                        <input type="checkbox" name="input-radio-group2" id="input-checkbox2" value=""  class="ju-Input ju-Input--checkbox">
                        <label for="input-checkbox2" class="">
                            <span class="icon-bg"></span>
                            <a>Please choose item</a>
                        </label>

                        <div class="error-message">
                            checkbox error message
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- switch button-->
        <div class="ju-row">
            <div class="ju-col-lg-6of24 ">
                Switch:
            </div>

            <div class="ju-col-lg-18of24 u-">
                <form>

                    <div class="ju-InputWrapper">
                        <input type="checkbox" name="input-switch" id="input-switch" value=""  class="ju-Input ju-Input--switch ju-Input--blue">
                        <label for="input-switch" class="">
                            <span class="switch-icon"></span>
                            <span class="label">Blue button - Please choose item</span>
                        </label>

                        <div class="error-message">
                            checkbox error message
                        </div>
                    </div>

                    <div class="ju-InputWrapper">
                        <input type="checkbox" name="input-switch" id="input-switch1" value=""  class="ju-Input ju-Input--switch ju-Input--orange">
                        <label for="input-switch1" class="">
                            <span class="switch-icon"></span>
                            <span class="label">Orange button - Please choose <br> item</span>
                        </label>

                        <div class="error-message">
                            checkbox error message
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="ju-col-lg-8of24">
        <h2>Form Examples</h2>

        <!-- radio button-->
        <div class="ju-row">
            <div class="ju-col-lg-6of24">
                Input with button:
            </div>

            <div class="ju-col-lg-18of24 u-">
                <form >
                    <div class="ju-InputWrapper ju-InputWrapperWithButton is-icon">
                        <div class="button">
                            <button type="button">
                                <i class="fa fa-arrow-right"></i>
                            </button>
                        </div>

                        <div class="input">
                            <input type="text" class="ju-Input ju-Input--text is-animation" placeholder="Placeholder">
                        </div>
                    </div>

                    <div class="ju-InputWrapper ju-InputWrapperWithButton ">
                        <div class="button">
                            <button type="button">
                                Click here
                            </button>
                        </div>
                        <div class="input">
                            <input type="text" class="ju-Input ju-Input--text is-animation" placeholder="Placeholder">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</section>

