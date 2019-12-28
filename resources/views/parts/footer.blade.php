<!-- Footer -->
<footer class="page-footer">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
        <ul class="list-inline mb-0">

            <li class="list-inline-item">
                © <?php echo date("Y"); ?> {{ config('app.name') }}
            </li>

            <li class="list-inline-item"> | </li>

            <li class="list-inline-item">
                <a href="https://github.com/eduayme/RescueApp/releases/tag/v1.1" target="_blank">
                    v1.1
                </a>
            </li>

            <li class="list-inline-item"> | </li>

            <li class="list-inline-item">
                <a href="https://github.com/eduayme/RescueApp" target="_blank">
                    <span class="octicon octicon-mark-github"></span>
                    {{ __('main.open_source') }}
                </a>
            </li>

            <li class="list-inline-item"> | </li>

            <li class="list-inline-item">
                <a href="https://larecipe.binarytorch.com.my/docs/2.2/installation">
                    {{ __('main.documentation') }}
                </a>
            </li>

            <li class="list-inline-item"> | </li>

            <li class="list-inline-item">
                <a href="{{ URL::to('privacy') }}">
                    {{ __('main.privacy_policy') }}
                </a>
            </li>

            <li class="list-inline-item"> | </li>

            <li class="list-inline-item">
                <a href="{{ URL::to('service') }}">
                    {{ __('main.terms_of_service') }}
                </a>
            </li>

        </ul>
    </div>

</footer>
