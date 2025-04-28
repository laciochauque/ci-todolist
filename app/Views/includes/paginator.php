<ul class="pagination justify-content-center">
    <li class="page-item">
        <a class="page-link lh-sm" href="<?= $paginator->previous ?? 'javascript:void(0)' ?>" aria-label="Previous">
            <span aria-hidden="true">«</span><span class="sr-only">Anterior</span>
        </a>
    </li>
    <?php for($page = 1; $page <= $paginator->pageCount; $page++):?>
        
        <li class="page-item <?=$paginator->currentPage==$page ? 'active':'' ?>">
            <a class="page-link lh-sm" href="<?=$paginator->uri->setQuery("?page={$page}&length={$paginator->perPage}")?>"><?=$page?></a>
        </li>
    <?php endfor; ?>
    <li class="page-item">
        <a class="page-link lh-sm" href="<?= $paginator->next ?? 'javascript:;' ?>" aria-label="Next">
            <span aria-hidden="true">»</span><span class="sr-only">Próximo</span></a>
    </li>
</ul>