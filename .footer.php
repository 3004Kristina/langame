<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && \mb_strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return;
} ?>
</section>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/promise-polyfill/8.2.0/polyfill.min.js"
        integrity="sha512-YK+bAjUuYdjPksbGQIIIsUn5hgYFsc+nXgx21Wwby9Mv+rJd8WZH2FRe1RdlTjFu1vxlGia9/RqmUMcZtX+BrA=="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="/js/script.js?t=<?= time(); ?>"></script>
</body>
</html>
