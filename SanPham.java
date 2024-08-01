package Lab1.AND103.Demo5;



public class SanPham {
    private String Masp,TenSP,MoTa;

    public SanPham() {
    }

    public SanPham(String masp, String tenSP, String moTa) {
        Masp = masp;
        TenSP = tenSP;
        MoTa = moTa;
    }

    public String getMasp() {
        return Masp;
    }

    public void setMasp(String masp) {
        Masp = masp;
    }

    public String getTenSP() {
        return TenSP;
    }

    public void setTenSP(String tenSP) {
        TenSP = tenSP;
    }

    public String getMoTa() {
        return MoTa;
    }

    public void setMoTa(String moTa) {
        MoTa = moTa;
    }
}
