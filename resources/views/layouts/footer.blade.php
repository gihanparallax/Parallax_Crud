
<style>
.footer {
  position: fixed;
  margin-top:2px;
  left: 0;
  bottom: 0;
  width: 100%;
  text-align: center;
  color:black;
  background-color: white;
}
</style>

<div class="footer">
<p id="copyright">
<b>&copy;
    <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
     CRUD Application | Created By Gihan Amarasinghe</b>
</p>
</div>


<!-- Javascript -->
<script src="{{asset('assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/jvectormap.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/morrisscripts.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/knob.bundle.js')}}"></script>
<script src="{{asset('assets/bundles/mainscripts.bundle.js')}}"></script>
<script src="{{asset('assets/js/pages/ui/sortable-nestable.js')}}"></script>
<script src="{{asset('assets/js/index.js')}}"></script>
<script src="{{asset('assets/bundles/datatablescripts.bundle.js')}}"></script>

<!-- Data tables Js -->
<script src="{{asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>

@yield('scripts')

<script>
    setTimeout(function() => {
        $('#alert').slideUp();
    },4000);
</script>
