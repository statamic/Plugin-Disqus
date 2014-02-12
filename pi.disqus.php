<?php
class Plugin_disqus extends Plugin {

    var $meta = array(
        'name'       => 'Disqus',
        'version'    => '1',
    );

    public function comments()
    {
        $account        = $this->fetchParam('account', null);
        $developer_mode = $this->fetchParam('dev', false, false, true);

        $developer_mode = $developer_mode ? '1' : '0';

        if ($account) {
            $output = '
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            var disqus_shortname = "'.$account.'"; // required: replace example with your forum shortname
            var disqus_developer = '.$developer_mode.';
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

}
