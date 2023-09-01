function build_url() {
  var url = encodeURI(decodeURI(document.querySelector('#url').value));
  if (url === "" || url.indexOf("http") === -1) {
    document.getElementById("b_url").innerHTML = `Vui lòng nhập một liên kết để khởi tạo QR！`;
  } else {
    url = "/api/?c=" + url;
    document.getElementById("b_url").innerHTML = `<img src="${url}" width=200></img>`;
  }

}