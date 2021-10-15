
function Calc(){
amt = eval (document.getElementById("amount").value);
yrs = eval (document.getElementById("years").value) * 12;
rte = eval (document.getElementById("rate").value) / 1200;
pmt=(rte + (rte / (Math.pow((1 + rte),(yrs)) -1))) * amt;
pmt = pmt * 100;
pmt = Math.round(pmt);
pmt = pmt / 100;
pi = (pmt * yrs) * 100;
pi = Math.round(pi);
pi = pi / 100;
document.getElementById("payment").value = pmt;
document.getElementById("pi").value = pi;
}