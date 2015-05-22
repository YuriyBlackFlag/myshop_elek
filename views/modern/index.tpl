{*Шаблон главной колонки*}
<div id="templatemo_content">

            <div class="scroll">
                <div class="scrollContainer">

                    <div class="panel" id="home">
                        <h2>Наши товары</h2>

            {foreach $resProducts as $item}
                <div id="main">
                    <a  href="/product/{$item['id']}/">
                        <img src="../www/images/products/{$item['image']}" width="120" />
                    </a><br />
                    <a href="/product/{$item['id']}/">{$item['name']}</a>
                </div>
                {if $item@iteration mod 3 == 0}
                        <div id="bot"></div>
                {/if}
            {/foreach}
            </div>
                </div>
            </div>
</div>

