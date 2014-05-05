<?php
class Plugin_disqus extends Plugin {

    var $meta = array(
        'name'       => 'Disqus',
        'version'    => '1.1',
    );

    public function comments()
    {
        $account        = $this->fetchParam('account', null);
        $url            = $this->fetchParam('url', null);

        $developer_mode = $this->fetchParam('dev', false, false, true);

        $developer_mode = $developer_mode ? '1' : '0';

        if ($account) {
            $output = '
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = "'.$account.'"; // required: replace example with your forum shortname
            var disqus_developer = '.$developer_mode.';'

            if ($url) {
                $output .= '
        var disqus_identifier = "'.$url.'";';
            }

            output .= '
            /* * * DON\'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement("script"); dsq.type = "text/javascript"; dsq.async = true;
                dsq.src = "http://" + disqus_shortname + ".disqus.com/embed.js";
                (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
        <a href="http://disqus.com" class="dsq-brlink">blog comments powered by <span class="logo-disqus">Disqus</span></a>
        ';
            return $output;
        }

        return '';
    }

    public function countscript()
    {
        $account        = $this->fetchParam('account', null);

        if ($account) {
            $output = '
        <script type="text/javascript">
            var disqus_shortname = "'.$account.'"; // required: replace example with your forum shortname
            /* * * DON\'T EDIT BELOW THIS LINE * * */
            (function () {
            var s = document.createElement("script"); s.async = true;
            s.type = "text/javascript";
            s.src = "http://" + disqus_shortname + ".disqus.com/count.js";
            (document.getElementsByTagName("HEAD")[0] || document.getElementsByTagName("BODY")[0]).appendChild(s);
            }());
        </script>
        ';
            return $output;
        }

        return '';
    }

}
