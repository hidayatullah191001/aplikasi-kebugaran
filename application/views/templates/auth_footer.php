
<script src="<?=base_url('assets/') ?>assets/libs/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap tether Core JavaScript -->
<script src="<?=base_url('assets/') ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
<script src="<?=base_url('assets/') ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?=base_url('assets/') ?>dist/js/app-style-switcher.js"></script>
<!--Wave Effects -->
<script src="<?=base_url('assets/') ?>dist/js/waves.js"></script>
<!--Menu sidebar -->
<script src="<?=base_url('assets/') ?>dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="<?=base_url('assets/') ?>dist/js/custom.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $('#lihat').click(function(){
            if ($(this).is(':checked')){
                $('#password').attr('type','text');
                $('#password1').attr('type','text');
            }
            else{
                $('#password').attr('type','password');
            }
        })
    })
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#lihatregister').click(function(){
            if ($(this).is(':checked')){
                $('#password').attr('type','text');
                $('#password1').attr('type','text');
            }
            else{
                $('#password').attr('type','password');
                $('#password1').attr('type','password');

            }
        })
    })
</script>

</body>

</html>