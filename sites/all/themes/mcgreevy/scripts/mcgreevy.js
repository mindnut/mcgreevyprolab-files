CKEDITOR.replace( 'editor1', {
    format_tags: 'p;h2;h3;pre;links', // entries is displayed in "Paragraph format"
    format_links: {
        name: 'MCG Caption',
        element: 'span',
        styles: {
            color: 'red',
            'font-family': 'arial',
            'text-align': 'right',
            'font-weight': 'bold'
        }
    }
} );