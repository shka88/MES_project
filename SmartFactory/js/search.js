function fnsearch()
{
    if (!document.searchform2.form1.value)
    {
        alert("의뢰코드를 입력하세요");    
        document.searchform2.form1.focus();
        return;
    }

    if (!document.searchform2.form2.value)
    {
        alert("발주업체를 입력하세요");    
        document.searchform2.form2.focus();
        return;
    }
    if (!document.searchform2.form3.value)
    {
        alert("자재이름을 입력하세요");    
        document.searchform2.form3.focus();
        return;
    }
    document.searchform2.submit();
}
