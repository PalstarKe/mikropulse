{if $paginator}
    <nav aria-label="Page navigation example" style="margin-top: 6px;">
        <ul class="pagination justify-content-end" style="border-radius: 6px;">
            <li style="background: #D7DAE3;" {if empty($paginator['prev'])}class="disabled page-item" {/if}>
                <a class="page-link" href="{$paginator['url']}{$paginator['prev']}" aria-label="Previous">
                    <span aria-hidden="true">{Lang::T('Prev')}</span>
                </a>
            </li>
            {foreach $paginator['pages'] as $page}
                <li class="page-item {if $paginator['page'] == $page}active{elseif $page == '...'}disabled{/if}"><a class="page-link"
                        href="{$paginator['url']}{$page}">{$page}</a></li>
            {/foreach}
            <li style="background: #D7DAE3;" {if $paginator['page']>=$paginator['count']}class="disabled page-item" {/if}>
                <a class="page-link" href="{$paginator['url']}{$paginator['next']}" aria-label="Next">
                    <span aria-hidden="true">{Lang::T('Next')}</span>
                </a>
            </li>
        </ul>
    </nav>
{/if}