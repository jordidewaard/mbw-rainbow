<style>
    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        border-top: 2px solid #aaaa;
        background: #2c3e50;
        color: #fff !important;
        padding: 0.5rem 1rem;
    }

    p {
        font-family: "Nunito", sans-serif;
        font-size: 0.9rem;
        font-weight: 400;
        line-height: 1.6;
    }
</style>

<div class="footer">
    <p>Laravel: {{ app()->version() }}
    - <?php echo date('Y-m-d');?></p>
</div>