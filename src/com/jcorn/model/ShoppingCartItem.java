package com.jcorn.model;

import com.jcorn.controller.JocolateController;

/**
 * JocolateManager
 *
 * @author Markus Petritz
 * @version 1.0.0
 * @see http://petritzdesigns.com
 */
public class ShoppingCartItem {

    private final String name;
    private final String type;
    private final String size;
    private final String logo;
    private int amount;
    private double price;

    public ShoppingCartItem(String name, String type, String size, String logo, int amount, double price) {
        this.name = name;
        this.type = type;
        this.size = size;
        this.logo = logo;
        this.amount = amount;
        this.price = price;
    }
    
    public ShoppingCartItem(String name, String type, String size, String logo, int amount) {
        this.name = name;
        this.type = type;
        this.size = size;
        this.logo = logo;
        this.amount = amount;
        
        if(logo.equals("Text")) {
            this.price = JocolateController.calculatePrice(new JocolateModel(type, size, "Text", logo, amount));
        } else {
            this.price = JocolateController.calculatePrice(new JocolateModel(type, size, logo, amount));
        }
    }

    public int getAmount() {
        return amount;
    }

    public void setAmount(int amount) {
        this.amount = amount;
    }

    public String getName() {
        return name;
    }

    public String getType() {
        return type;
    }

    public String getSize() {
        return size;
    }

    public String getLogo() {
        return logo;
    }

    public double getPrice() {
        return price;
    }

    @Override
    public String toString() {
        return String.format("%2dx %s: %s/%s/%s - € %4.2f", amount, name, type, size, logo, price);
    }

    public String toFileString() {
        return String.format("%s|%s|%s|%s|%d", name, type, size, logo, amount);

    }
}
