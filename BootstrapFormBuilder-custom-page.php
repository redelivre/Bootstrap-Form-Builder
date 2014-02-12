<?php get_header(); ?>
<section id="main-section" class="wrap clearfix">
	<div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">Bootstrap Form Builder</a>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row clearfix">
        <!-- Building Form. -->
        <div class="span6">
          <div class="clearfix">
            <h2>Your Form</h2>
            <hr>
            <div id="build">
              <form id="target" class="form-horizontal">
              </form>
            </div>
          </div>
        </div>
        <!-- / Building Form. -->

        <!-- Components -->
        <div class="span6">
          <h2>Drag & Drop components</h2>
          <hr>
          <div class="tabbable">
            <ul class="nav nav-tabs" id="formtabs">
              <!-- Tab nav -->
            </ul>
            <form class="form-horizontal" id="components">
              <fieldset>
                <div class="tab-content">
                  <!-- Tabs of snippets go here -->
                </div>
              </fieldset>
            </form>
          </div>
        </div>
        <!-- / Components -->

      </div>

      <div class="row clearfix">
        <div class="span12">
          <hr>
          By Adam Moore (<a href="http://twitter.com/minikomi" >@minikomi</a>).<br/>
          Source on (<a href="https://github.com/minikomi/Bootstrap-Form-Builder" >Github</a>).
        </div>
      </div>

    </div> <!-- /container -->

	<script data-main="<?php echo BootstrapFormBuilder_URL; ?>assets/js/main-built.js" src="<?php echo BootstrapFormBuilder_URL; ?>assets/js/lib/require.js" ></script>
</section>
<!-- #main-section -->
<?php get_footer(); ?>