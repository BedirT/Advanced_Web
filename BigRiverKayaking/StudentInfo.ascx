<%@ Control Language="C#" AutoEventWireup="true" CodeFile="StudentInfo.ascx.cs" Inherits="StudentInfo" %>
Last name&nbsp;<asp:RequiredFieldValidator ID="lastNameValidate" runat="server" ControlToValidate="lastName"
    Text="**Required field**" /><br />
<asp:TextBox ID="lastName" runat="server" Width="265" /><br />
First name&nbsp;<asp:RequiredFieldValidator ID="firstNameValidate" runat="server"
    ControlToValidate="firstName" Text="**Required field**" /><br />
<asp:TextBox ID="firstName" runat="server" Width="265" /><br />
Telephone&nbsp;<asp:RequiredFieldValidator ID="telephoneValidate" runat="server"
    ControlToValidate="telephone" Text="**Required field**" /><br />
<asp:TextBox ID="telephone" runat="server" Width="265" /><br />
E-mail&nbsp;<asp:RequiredFieldValidator ID="emailValidate" runat="server" ControlToValidate="email"
    Text="**Required field**" /><br />
<asp:TextBox ID="email" runat="server" Width="265" /><br />
Confirm e-mail&nbsp;<asp:RequiredFieldValidator ID="confirmEmailValidate" runat="server"
    ControlToValidate="confirmEmail" Text="**Required field**" /><br />
<asp:TextBox ID="confirmEmail" runat="server" Width="265" /><br />
<asp:CompareValidator ID="compareEmail" runat="server" ControlToValidate="confirmEmail"
    Operator="Equal" Display="Dynamic" ControlToCompare="email">**You did not enter the same value in the e-mail and e-mail confirmation fields**<br /></asp:CompareValidator>