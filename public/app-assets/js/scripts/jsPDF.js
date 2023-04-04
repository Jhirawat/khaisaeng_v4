function generatePDF() {
    const element = document.getElementById("invoice");

    html2pdf().from(element).toContainer().toCanvas().toImg().toPdf().save();
}
