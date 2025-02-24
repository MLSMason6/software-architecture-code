<%@page import="java.util.ArrayList" %>

<html>
    <body> 
        Add to shopping cart:
        <form action="index.jsp">
            <input name="itemid" type="text"/>
            <input type ="submit" value="Add"/>
        </form>

        Read query string & parameter: 
        <%= request.getQueryString() %>
        <%= request.getParameter("itemid") %>

        <% 
        // get cart out of the session
        ArrayList<String> cart = (ArrayList<String>) session.getAttribute("cart");

        // if not found, create itemid 
        if (cart==null) {
            cart = new ArrayList<String>();
            session.setAttribute("cart", cart);
        }

        // save the item to the cart 
        String item = request.getParameter("itemid");
        if (item != null) {
            cart.add(item);
        }

        // save the cart into the session 
        session.setAttribute("cart", cart);

        // display the contents of the cart
        out.println("<ul>");
        for (String thing: cart) { 
            out.println("<li>" + thing + "</li>");
        }
        out.println("</ul>");
        %>
    </body>
</html>