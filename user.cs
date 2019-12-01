using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Tubes_webpro
{
    #region User
    public class User
    {
        #region Member Variables
        protected string _Nama;
        protected string _Date;
        protected string _Email;
        protected string _Username;
        protected string _Password;
        protected string _Role;
        #endregion
        #region Constructors
        public User() { }
        public User(string Nama, string Date, string Email, string Password, string Role)
        {
            this._Nama=Nama;
            this._Date=Date;
            this._Email=Email;
            this._Password=Password;
            this._Role=Role;
        }
        #endregion
        #region Public Properties
        public virtual string Nama
        {
            get {return _Nama;}
            set {_Nama=value;}
        }
        public virtual string Date
        {
            get {return _Date;}
            set {_Date=value;}
        }
        public virtual string Email
        {
            get {return _Email;}
            set {_Email=value;}
        }
        public virtual string Username
        {
            get {return _Username;}
            set {_Username=value;}
        }
        public virtual string Password
        {
            get {return _Password;}
            set {_Password=value;}
        }
        public virtual string Role
        {
            get {return _Role;}
            set {_Role=value;}
        }
        #endregion
    }
    #endregion
}