package com.example.btl.adapter;

import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentManager;
import androidx.fragment.app.FragmentPagerAdapter;

import com.example.btl.fragment.KhoanChiFragment;
import com.example.btl.fragment.LoaiChiFragment;

public class PageChiAdapter extends FragmentPagerAdapter {
    public PageChiAdapter(FragmentManager fm) {
        super(fm);
    }
    @Override
    public Fragment getItem(int position) {
        switch (position) {
            case 0:
                return new KhoanChiFragment();
            case 1:
                return new LoaiChiFragment();
            default:
                return null;
        }
    }

    @Override
    public int getCount() {
        return 2;
    }
    @Override
    public CharSequence getPageTitle(int position) {
        switch (position) {
            case 0:
                return "Khoản Chi";
            case 1:
                return "Loại Chi";
            default:
                return null;
        }
    }
}
